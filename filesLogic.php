<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'wisdom');
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked

    $subject_name =$_POST['subject_name'];
    $description =$_POST['description'];
    $f_name =$_POST['f_name'];
   
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','png','pptx'])) {
        echo "You file extension must be .zip, .pdf ,.jpg, .png, .pptx or .docx";
    } elseif ($_FILES['myfile']['size'] > 2097152 ) { // file shouldn't be larger than 2Megabyte
       echo "<script>alert('File size should be less than 2MB !!... ');window.location='upload.php'</script>";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (subject_name,description,f_name,name, size, downloads) VALUES ('$subject_name','$description','$f_name','$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {

                
                header("location:downloads.php");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
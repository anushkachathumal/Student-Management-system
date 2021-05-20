<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Download files</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        form {
          width: 30%;
          margin: 100px auto;
          padding: 30px;
          border: 1px solid #555;
        }
        input {
          width: 100%;
          border: 1px solid #f1e1e1;
          display: block;
          padding: 5px 10px;
        }
        button {
          border: none;
          padding: 10px;
          border-radius: 5px;
        }
        table {
          width: 60%;
          border-collapse: collapse;
          margin: 100px auto;
          border-radius: 5px;
          margin-top: 50px;
          
        }
        th,td {
          height: 50px;
          vertical-align: center;
          border: 1px solid lavender;
          font-family: 'Times New Roman', Times, serif;
          width: 35%;
          
        }
        body{
          background-size: cover;
          }
        td,a, a:hover{
          color: silver;
          
        }
       th{
         color: seashell;
         text-align: center;
         font-size: 18px;
       }
       h2{
         margin-top: 60px;
         font-family: 'Times New Roman', Times, serif;
         font-weight: bolder;
       }
       .details
       {
         text-align:center;
       }
       
    </style>
</head>

<body background = "image/f.jpg">
<?php include('navigation.php');?>

 

<div class="container" style="margin-top: 30px;margin-left: 50px;width: 1500px;">
   <!-- Content Row -->
   <div class="row" style="margin-top: 30px;">
     <!-- Sidebar Column -->
     <div class="col-lg-3 mb-4">
       <div class="list-group">
         <a href="adminbar.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><b>Home</a></b>
          <a href="adminbar.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><b>Attendance Marking</a></b>
          <a href="view booking.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"> <b>Payments</a></b>
           <a href="emailsend.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Forum</a></b>
         <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Student</a></b>
          <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Teacher </a></b>
            <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Administrator </a></b>

          <a href="ForumAdmin.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Subject</a></b>
            <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Feedbacks </a></b>
       </div>
     </div>
       
            <div class="col-lg-9 mb-10">
<h2 align= "center"><i>Download notes here...</i></h2>
<table>

    <th>Subject Name</th> 
    <th>Filename</th>
    <th>Size</th>
    <th>Downloads</th>
    <th>File</th>

<tbody>
  <?php foreach ($files as $file): ?>
    <tr class="details">
      
      <td><?php echo $file['subject_name']; ?></td>
      <td><?php echo $file['f_name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>"><i class="fa fa-download"></i></td>
    </tr>

  <?php endforeach;?>

</tbody>
</table>
  </div></div>
<?php include('footer.php');?>
</body>
</html>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initi al-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Registration</title>

    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
    <style>
        ::placeholder {
          color: rgb(95, 88, 88);
          opacity: 1; 
        }
        .status{
          font-size:15px;
          color: green;
          padding:15px;  
        }
    </style>
</head>
<body>

    <div class="main">
        <div class="container" style="height:650px;">
            
            <form method="POST" class="appointment-form" id="appointment-form" action="MainAction.php">
                
                <h2>Registration</h2>
                <div class="form-group-1">
                     <input type="text" name="fullname" id="first_name" placeholder="Full Name" required />

                    <input type="text" name="idnumber" id="last_name" placeholder="Identity Number" required />

                    <input type="text" name="address" id="id_number" placeholder="Address" required />

                    <input type="text" name="email" id="address" placeholder="Email" required />

                    <input type="number" name="telephone" id="phone_number" placeholder="Phone Number" required />

                    <input type="text" name="subject" id="email" placeholder="Class that you hope to attend" required />

                   
                    

   <!---Student's academic year-->
                   
                  
                  
                </div>

               
                
              
                
               
                <div class="form-submit">
                <div class="g-recaptcha" data-sitekey="6LfSdswUAAAAAAY-SqWlzTD-EVJ5Y2jhrI8tw55X"></div>
                    <input type="submit" name="student_save" id="submit" class="submit" value="Submit" />
                </div>
                </div>
            </form>
            
            <div class="status">
                <?php
                
                if(isset($_POST['student_save'])){
                    $first_name  = $_POST['first_name'];
                    $last_name  = $_POST['last_name'];
                    $id  = $_POST['id_number'];
                    $address  = $_POST['address'];
                    $phone_number  = $_POST['phone_number'];
                    $email  = $_POST['email'];
                    $parent_name  = $_POST['parent_name'];
                    $guardian_type  = $_POST['guardian_type'];
                    $parent_tnumber  = $_POST['parent_tnumber']; 
                    $parent_email  = $_POST['parent_email'];
                    $siblings  = $_POST['siblings '];


                    $secretKey ="6LfSdswUAAAAAEGOgpcDFR7M-dwa9OLGEYN5_nrk";
                    $responseKey = $_POST['g-recaptcha-response'];
                    $userIP= $_SERVER['REOMTE_ADDR'];
                    $url ="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";   
                     $response = file_get_contents($url);
                     $response = json_decode($response);

                     if($response->success){
                         echo "success";
                     }else{
                         echo "failed";
                     }
                }
                
                
                
                
                ?>

    </div>

        </div>

    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
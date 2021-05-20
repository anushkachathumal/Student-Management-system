 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initi al-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Registration</title>

    
    <link rel="stylesheet" href="wisdom/fonts/material-icon/css/material-design-iconic-font.min.css">

    
    <link rel="stylesheet" href="wisdom/css/style.css">
  
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
        <div class="container" style="height:800px;">
            
            <form method="POST" class="appointment-form" id="appointment-form" action="MainAction.php">
                
                <h2>Registration</h2>
                <div class="form-group-1">
                    <input type="text" name="fullname" id="first_name" placeholder="Full Name" required />

                    <input type="text" name="idnumber" id="last_name" placeholder="Identity Number" required />

                    <input type="text" name="address" id="id_number" placeholder="Address" required />

                    <input type="text" name="email" id="address" placeholder="Email" required />

                    <input type="number" name="telephone" id="phone_number" placeholder="Phone Number" required />

                    <input type="email" name="subject" id="email" placeholder="Class that you hope to attend" required />

                   
                    

   <!---Student's academic year-->
                   
                  
                  
                </div>

               
               
                
               
              
            </form>
            
           

        </div>

    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
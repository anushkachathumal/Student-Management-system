<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-12">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<style>
body {
  background-image: url('bbbb.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}


</style>
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="">
                        <h1 style="text-align: center">Pay Here</h1>
                        <form class="form-horizontal" method="post" action="paymentsController.php" enctype="multipart/form-data" onsubmit="return validate()">


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="Sname" name="studentName" type="text" placeholder="Student Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="SID" name="studentId" type="number" placeholder="Student ID Number" class="form-control" required>
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <form action="/action_page.php"> 
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                     <div class="col-md-2">   
                                           <label for="sel1">Select your subject</label>

                                     </div>
                                    <div class="col-md-7">
                                        <input type="checkbox" name="subject[]" value="Combined Maths"> Combine maths<br>
                                        <input type="checkbox" name="subject[]" value="Physics"> physics<br>
                                        <input type="checkbox" name="subject[]" value="Chemestry"> Chemestry<br>
                                        <input type="checkbox" name="subject[]" value="Biology"> Biology<br>
                                        <input type="checkbox" name="subject[]" value="General English"> General English<br>
                                     </div>
                            </div>

                            
                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                  <select class="form-control" id="sel1" name="month" style="width:66%;">
                                <div class="col-md-8">
                                    <label for="sel1">Select the Month</label>
                                 
                                        <option value="January">January</option>
                                        <option value="Febaury">Febaury</option>
                                        <option value="March">March</option>
                                        <option value="March">Aprial</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                        
                                    </select>
                                </div>
                            </div>
                          
                        

                            <div class="form-group">
                                 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-12 text-center">
                                    <input type="submit" name="reg_user" class="btn btn-primary btn-sm" value="Submit">
                                    <input type="reset" class="btn btn-danger btn-sm" value="Reset">
                                </div>
                            </div> 
                            
                            
                            
                            
                            
                            <br><br>
                             
                            
                           
 

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>

function validate() {
  var checkbox= document.querySelector('input[name="subject[]"]:checked');
  if(!checkbox) {
    alert('Please select!');
    return false;
  }
  else return confirm('confirm submit?');
}


</script>
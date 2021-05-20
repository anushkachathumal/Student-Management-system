<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-10">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<style>
body {
  background-image: url('1234.jpg');
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
                        <form class="form-horizontal" method="post" action="reg_pdo.php">


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="Sname" name="sname" type="text" placeholder="Student Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="SID" name="id" type="INT" placeholder="Student ID Number" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-2">
                                   <font face="Tamaha" color=black>Select your Class</font>
                                </div>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label><input type="radio" name="class" checked>Group</label>

                                        <label><input type="radio" name="class">Mass</label>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                  <div class="form-group">
                      <form action="/action_page.php"> 
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                           <div class="col-md-2">   
                                 <label for="sel1">Select you need to pay</label>
                                      
                           </div>
                          <div class="col-md-6">
                         <input type="checkbox" name="subject" value="cmaths"> Combine maths<br>
                         <input type="checkbox" name="subject" value="physis"> physics<br>
                         <input type="checkbox" name="subject" value="Chemestry"> Chemestry<br>
                         <input type="checkbox" name="subject" value="Biology"> Biology<br>
                         <input type="checkbox" name="subject" value="genglish"> General English<br>
                         </select>
                        
                       </form>
                           </div>
                  </div>
                            
                            
                            
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                  <select class="form-control" id="sel1" name="month">
                                <div class="col-md-8">
                                    <label for="sel1">Select the Month</label>
                                 
                                        <option value="January">January</option>
                                        <option value="Febaury">Febaury</option>
                                        <option value="March">March</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                        
                                    
                                </div>
                            </div>
                          <br><br>
                        

                            <div class="form-group">
                                 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-12 text-center">
                                    <input type="submit" name="reg_user" class="btn btn-primary btn-sm" value="Submit">
                                    <input type="reset" class="btn btn-danger btn-sm" value="Reset">
                                </div>
                            </div>
                             
                            
                           <br><br>
                                     <script
    src="https://www.paypal.com/sdk/js?client-id=Ac2aTn-ilaIMmZW790VLnIsB3zw61aBKNH0wBZdsS_dPhjLeqh1WgnnaQt5Cr7cE0AED8z7sa6Ow3beS">
  </script>
  


  <div id="paypal-button-container"></div>



<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '10.0'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
        // Call your server to save the transaction
        return fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        });
      });
    }
  }).render('#paypal-button-container');
</script>
    </body>
</html>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

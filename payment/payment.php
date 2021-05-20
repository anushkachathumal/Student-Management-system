<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-10">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
        <style>
        body {
          background-image: url('aaa.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }

        </style>
  </head>
    <body>
        <div class="container">
        <script src="https://www.paypal.com/sdk/js?client-id=Ac2aTn-ilaIMmZW790VLnIsB3zw61aBKNH0wBZdsS_dPhjLeqh1WgnnaQt5Cr7cE0AED8z7sa6Ow3beS">
          </script>
  


          <div class="row" style="margin-top:20vh;">
              <center>
              <div id="paypal-button-container"></div>
                   <form method="post"  action="payment_reciept.php">
                  <input type="submit" value="Generate Bill" name="bill" class="btn btn-success" >
                 </form>
              </center>
          </div>
        
        
       <?php
        
       session_start();
       $totalFee = $_SESSION['totalFee'];
       $totalFeeDollar = round($totalFee/180,2);
       
       ?>
       
            
        </div>

    </body>
</html>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $totalFeeDollar; ?>'
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
<?php
  //include php Conn.php file
  include_once("Conn.php");
  $fetchdata=new DB_con();
  $a = NULL;
?>
<html>
<head>
    <style>
        body { 
            background-image: url('img/payBackground.jpg');
        }
    </style> 
</head>
<div class="container">
  <div class="row">
  
  <!--left row-->
  <div class="col-md-5">
    <h3 class="text-white">Subjects</h3>
    <ul class='list-group'>
    
    <!-- get subjects -->  
    <?php
    if( isset($_POST['submit'])) {
      $a = $_POST['retriveId']; 
    }
    // call fetchsub() method
    if ($a != NULL ){ 
      $sql=$fetchdata->fetchsub($a);
    

     
      while($row = $sql->fetch_assoc()){

        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
        echo $row["name"];
        echo "<span class='badge badge-primary badge-pill'>"; echo $row["value"];
        echo"</span>";
        echo"</li>";
      }
    }
     
    ?>
    </ul>  
  </div>

  <!--middle row-->
  <!-- fetch date into form by calling fetchdata() method -->
  <?php
    $sql=$fetchdata->fetchdata($a);
    $row = mysqli_fetch_array($sql);
  ?>
  
  <div class="col-md-6">
    <h3 class="text-white">Payment Details</h3>
    <form class="needs-validation" novalidate action="./card-payment.php" method="post">
     <!-- <input type="hidden" name="$a" value="retriveId"> -->
    <div>
      <div class="form-row">
        <div class="col-md-6 mb-6">
          <label for="validationTooltip01" class="text-white">First name</label>
          <input style="background: rgba(171, 205, 239, 0.3);"} type="text" class="form-control text-white " id="txtFirstName" placeholder="First name" <?php if ($a != NULL ){ echo 'value="' . $row['first_name'] . '"'; } ?> required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-6 mb-6">
          <label for="validationTooltip02" class="text-white">Last name</label>
          <input style="background: rgba(171, 205, 239, 0.3);"} type="text" class="form-control text-white " id="txtLastName" placeholder="Last name" <?php  if ($a != NULL ){ echo 'value="' . $row['last_name'] . '"'; } ?> required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-6">
          <label for="validationTooltip03" class="text-white">Month</label>
          <input style="background: rgba(171, 205, 239, 0.3);"} type="text" class="form-control text-white " id="txtBranch" placeholder="Month:" required>
          <div class="invalid-tooltip">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-6 mb-6">
          <label for="validationTooltip03" class="text-white">Fee</label>
          <!-- calculate payment -->
          <?php
           if ($a != NULL){
            $sql=$fetchdata->calfee($a);
            $row=mysqli_fetch_array($sql);
           }
          ?>
          <input style="background: rgba(171, 205, 239, 0.3);"} type="number" class="form-control text-white " id="txtAmountForPay" value=<?php if ($a != NULL ){ echo $row['fee']; }?>>
          <div class="invalid-tooltip"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-12 mb-12">
          <label for="cname" class="text-white">Phone Number</label>
          <input style="background: rgba(171, 205, 239, 0.3);"} class="form-control text-white " type="number" id="phoneNo" name="phoneNo" placeholder="+9471234567" required="name">
        </div>
      </div>
      <div class="form-row">
        <!-- <label for="cname">Name on Card</label>
        <input class="form-control" type="text" id="cname" name="cardname" placeholder="Name on Card">
        <label for="ccnum">Credit card number</label>
        <input class="form-control" type="text" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-0000">
        <label for="expmonth">Exp Month</label>
        <input class="form-control" type="text" id="expmonth" name="expmonth" placeholder="Exp. Month"> -->
      </div>
      
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <!-- <label for="expyear">Exp Year</label>
          <input class="form-control" type="text" id="expyear" name="expyear" placeholder="YYYY">
          </div>
          <div class="col-md-3 mb-3">
            <label for="cvv">CVV</label>
            <input class="form-control" type="text" id="cvv" name="cvv" placeholder="CVV">
          </div> -->
        </div>
        <div class="col-md-12 mb-12" style="width: 100%">
          <button class="btn btn-primary text-white" id="btn_stripe_checkout" name="sm" type="button">Submit</button>
        </div>
      </div>
    </div>
    </form>
  </div>

  <!--right row-->
  <div class="col-md-3"></div>
</div>
</body>

<!--script files -->
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous"/>
<script src="script/jquery-3.4.1.js" crossorigin="anonymous"></script>
<script src="script/popper.min.js"  crossorigin="anonymous"></script>
<script src="script/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
//default ready false means -> dialog box is visible
var ready = false;
$(document).ready(function(){
  //if ready = false
  if(!ready){
      $('#popupWindow').modal('show');
  }
  var id1 = $('#retriveId').val(); 

  // if click retrive button
  $('#formsubmit').click(function(){
     $.ajax({
      type: 'post',
      data: {id: id1},
      success: function(response){
        ready = true;
        $('#popupWindow').modal('toggle');
      }
     });
  });
});
</script>
<script src="https://checkout.stripe.com/v2/checkout.js"></script>
	<script>
        var handler = StripeCheckout.configure({
            key: 'pk_test_825gr2j2VU0m53QoKBVELwyE00Sks2y5P6',
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            locale: 'auto',
            currency: 'LKR',
            token: function (token) {
                var data = {
                    'payment_id': token.id,
                    'email': token.email,
                    'name': `${$("#txtFirstName").val()} ${$("#txtLastName").val()}`,
                    'phoneNo': $("#phoneNo").val(),
                    'currency': 'LKR',
                    'payment_amount': $("#txtAmountForPay").val() * 100,
                    'payment_status': 'success',
                    'item_no': '001'
                };

                console.log(token);
                $.ajax({
                    type: "POST",
                    url: "card-payment.php",
                    data: data,
                    success: function (response) {
                        var obj = JSON.parse(response);
                        console.log(obj);
                        // if (obj.result == 1) {
                        //     window.location.href = obj.redirect;
                        // } else {
                        //     location.reload();
                        // }
                    }
                });
            }
        });
        document.getElementById('btn_stripe_checkout').addEventListener('click', function (e) {
            handler.open({
                name: 'subject-payment',
                description: 'checkouts',
                currency: 'LKR', 
                amount: $("#txtAmountForPay").val() * 100
            });
            e.preventDefault();
        });
        // Close Checkout on page navigation:
        window.addEventListener('popstate', function () {
            handler.close();
        });
	</script>
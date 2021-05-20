<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: px;
  width: 280px;
}


.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


.form-container {
  max-width: 400px;
  padding: 10px;
  background-color: white;
}


.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}




.form-container .btn {
  background-color: #5E0909;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


.form-container .cancel {
  background-color: #2A2640 ;
}


.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


</style>
</head>
<body>


<button class="open-button" onclick="openForm()">Join our Forum</button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Your problems..</h1>
	<div class="input">
	<label for="id"><b>Student_ID</b></label><br>
    <input type="text" placeholder="Enter your ID.." style="width:380px;height:30px;background-color: #f1f1f1;" name="id" required><br><br>
	
	<label for="id"><b>Subject_ID</b></label><br>
    <select class="ground" style="width:380px;height:30px;background-color: #f1f1f1;" name="s_id" required>
		<option>Select your Subject Id....</option>
		<option></option>
		<option></option>
		<option></option>
		
		</select></input>
	<br><br>
	
	<label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter your Name.." style="width:380px;height:30px;background-color: #f1f1f1;" name="name" required><br><br>
	</div>
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <input type="submit" class="btn" value="Send">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

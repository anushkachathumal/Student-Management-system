<!DOCTYPE html>
<html>
  <head>
    <title>feedback</title>
      <style>
    

input[type=text], textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=email]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


input[type=submit] {
  background-color:   #191970;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  float: right;
}



.container {
  border-radius: 5px;
  /* background-color: #B0C4DE; */
  padding: 20px;
  margin-left: 25%;
  margin-top: 6%;
}


.col-20 {
  float: left;
  width: 10%;
  margin-top: 6px;
}


.col-70 {
  float: left;
  width: 50%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


body{
		background-size: cover;
	}


  </style>
    </head>
      <body background = "image/f.jpg">
        <div class="container">
          <form name="insert" action="insert.php" method="post">
              <h2 style="margin-left: 20%;">Feedback form</h2>
                  <div class="row">
                    <div class="col-20">
                      <label for="name">Name</label>
                    </div>
                    <div class="col-70">
                      <input type="text" name="name" placeholder="Your name.." required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-20">
                      <label for="email">Email</label>
                    </div>
                    <div class="col-70">
                      <input type="email" name="email" placeholder="Your email.." required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-20">
                      <label for="comment">Comment</label>
                    </div>
                    <div class="col-70">
                      <textarea name="description" placeholder="Write your comment.." style="height:200px" required></textarea><br>
                      <input type="submit" value="Submit" name="feedbacksubmit" class="btn btn-primary" />
                    </div>
                  </div>
                 
              </form>
          </div>
      </body>
</html>

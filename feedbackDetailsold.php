<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
  <style>
    th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}
  thead{
    color: #191970;
    background-color: #B0C4DE;
  }
  table{
    border-collapse: collapse;
  width: 100%;
   margin: auto;
  }
  tbody{
    background-color:  #F5F5F5;
  }
  h3{
    color: #4169E1;

  }


  </style>
  
  </head>
     <body>
       <?php include('navigation.php');?>
		    <div class="container mt-3">
			     <div class="row">
             <h3>Feedback Details</h3>
			        <?php


                include("MainAction.php");
                $b= $ob->search("feedback");

                foreach($b as $key=> $value){
                   
                }

                ?>
                 
                 <table>
                          <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Comment</th>
                            </tr>
                            
                          </thead>
                       <tbody>

                          <?php
                        $v=$ob->search("feedback");
                        foreach ($v as $key => $value) {
                         $name=$value["name"];
                        $email=$value["email"];
                        $comment=$value["description"];
                        ?>
                    <tr>
      
                      <td><?php echo $name; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $comment; ?></td>
                      
                    </tr>
                  <?php

                  }


                ?>
              </tbody>
          </table>
        </div>
		</div>
	</body>
</html>






		
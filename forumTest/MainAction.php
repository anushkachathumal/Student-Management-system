<?php    
session_start();
include ("db.php");

class wisdom extends db{

//function for data saving 2 or more tables
        function save_array($table,$d){

            $res=mysqli_query($this->db(),"insert into $table VALUES(' ".implode("','",array_values($d))." ')");
            
            if ($res) {
                echo "<script>
                alert('Success');
                </script>";
              
            }else {
                echo "not saved";
            }
        }
        
//Normal Save        
        function save($table,$d){
           echo "fdhjg";
    $res=mysqli_query($this->db(),"insert into $table values(' ".implode("','",$d)." ')");
    if ($res) {
        echo "success";
    }else {
        echo "failed";
    }
        }

        function update($table,$fields,$id){
            $result=mysqli_Query($this->db(),"update $table set first_name='".$fields[1]."',last_name='".$fields[2]."',address='".$fields[3]."',telephone='".$fields[4]."',email='".$fields[5]."',path='".$fields[6]."',status='".$fields[6]."',type='".$fields[6]."' where student_id='".$id."'");
            if ($result) {
            echo "Successfully updated";
        } else {
            echo "error";
        }
        
        }

//delete function

function delete($table,$id){
	
    $result=mysqli_Query($this->db(),"DELETE  FROM $table WHERE  student_id='".$id."'");
    if ($result) {
        echo "Successfully deleted";
    } else {
        echo "error while deleting";
    }
    }
        
//select all data  when id provide
        function search_value_by($table,$field,$v){
	
            $result=mysqli_query($this->db(),"select * from $table where $field='".$v."'");
       
            $array=array();
           
            while ($row = mysqli_fetch_assoc($result)){
               
                $array[]=$row;
            }
      
            return $array;
        
        }

           function search($table){
                 $result=mysqli_Query($this->db(),"select * from $table");
            $array=array();
        while ($row=mysqli_fetch_assoc($result)) {
    $array[]=$row;
  }
  return $array;
}


//function form login 
        function login($u,$p){

          
                $res = mysqli_query($this->db(),"select * from login where username='$u' and password='$p' ");
                
                $b=false;
                while($row = mysqli_fetch_assoc($res)){
                    $b=true;
                    $array[]=$row;
                    $usertype=$row["usertype"];
					$stuID =$row["student_id"];
					$uname=$row["username"];
					
					$_SESSION["username"]=$u;
					$_SESSION["student_id"]=$stuID;
        
                }
        
            if ($b) {
                
                 if($usertype=="student") {
                      header("location:profile/profile.php");
                      echo "sysd";
					  
                  }
				  else if ($usertype=="admin") {
                      header("location:admin_index.php");
                      echo "sdgjsdfyt";
					  
                  }
            }else{
				echo "error";
                    //header("location:log.html");
            }
            
        }

        function search_value($table,$v,$field){
                $result=mysqli_query($this->db(),"select * from $table where $field='$v'");
            
                $array=array();
            
                while ($row=mysqli_fetch_assoc($result)){
                   
                    $array[]=$row;
                }
           
                return $array;
            
            }
      

    }


$ob=new wisdom;

//data save to teacher table

if (isset($_POST["saveTeacher"])) {

    $data_teacher=array(
        "teacher_id"=>$_POST["teacher_id"],
        "first_name"=>$_POST["first_name"],
        "last_name"=>$_POST["last_name"],
        "subject_name"=>$_POST["subject_name"],
        "address"=>$_POST["address"],
         "telephone"=>$_POST["telephone"],
         "email"=>$_POST["email"]
    ); 
    
    $ob->save_array("teacher",$data_teacher);
     

}

//data save to subject table

if(isset($_POST["saveSubject"])){
$data_subj = array(
       
        "sub_title"=>$_POST["subject_name"],
        
    ); 
    
    $ob->save_array("subject",$data_subj);

}

//data save to admin table
if(isset($_POST["saveAdmin"])){
$data_admin=array(
        "admin_id"=>$_POST["admin_id"],
        "first_name"=>$_POST["first_name"],
        "last_name"=>$_POST["last_name"],
        "address"=>$_POST["address"],
        "telephone"=>$_POST[ "telephone"],
        "email" =>$_POST["email"]
    ); 
    
    $ob->save_array("admin",$data_admin);

}

if (isset($_POST["delete"])) {
    $id=$_POST["id_number"];
        $ob->delete("student",$id);
    
    
    }

//update student
if (isset($_POST["student_up"])) {
   

$id=$_POST["id_number"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$address=$_POST["address"];
$phone_number=$_POST["phone_number"];
$email=$_POST["email"];
$pn=$_POST["pn"];
$guardian_type=$_POST["guardian_type"];
$parent_tnumber=$_POST["parent_tnumber"];

$data= array(
    "$id",
    "$first_name",
    "$last_name",
    "$address",
    "$phone_number",
    "$email",
"$pn",
"$guardian_type",
"$parent_tnumber");
    
//$ob->save($data);
$ob->update("student",$data,$id);
 header("location:adminreg.php");


}

// saving data
if (isset($_POST["attend_save"])) {
   
   
   $data9 = array(
    "student_id"=> $_POST["student_id"],
    "first_name"=> $_POST["first_name"],
    "last_name"=> $_POST["last_name"]
);
$ob->save_array("attendance",$data9);

}
// student registration
if (isset($_POST["student_save"])) {
    //student table
$data3 = array(
    "student_id"=> $_POST["id_number"],
    "first_name"=> $_POST["first_name"],
    "last_name"=> $_POST["last_name"],
     "address" =>$_POST["address"],
     "telephone" =>$_POST["phone_number"],
     "email" =>$_POST["email"]
); 

$ob->save_array("student",$data3);

   

}

if (isset($_POST["student_save"])) {
    //student table
$data3 = array(
    "student_id"=> $_POST["id_number"],
    "first_name"=> $_POST["first_name"],
    "last_name"=> $_POST["last_name"],
     "address" =>$_POST["address"],
     "telephone" =>$_POST["phone_number"],
     "email" =>$_POST["email"]
); 

$ob->save_array("student",$data3);

//admin do registration

if (isset($_POST["student"])) {
    //student table
    $data1 = array(
        
        "first_name"=> $_POST["first_name"],
        "last_name"=> $_POST["last_name"],
         
    ); 
    
    $ob->save_array("tbluser",$data1);
}
//parent table
    $data2 = array(
        "student_id"=> $_POST["id_number"],
        "parent_name"=> $_POST["pn"],
        "type"=> $_POST["guardian_type"],
         "telephone" =>$_POST["parent_tnumber"],
         "email" =>$_POST["parent_email"],
         "another_children" =>$_POST["siblings"]
    ); 
     
    $ob->save_array("parent",$data2);
// student_batch   
    $data5 = array(
        "student_id"=> $_POST["id_number"],
        "batch_name"=> $_POST["bat"]
    );
    $ob->save_array("student_batch",$data5);
// subject_student
    $data6 = array(
        "student_id"=> $_POST["id_number"],
        "subject_title"=> $_POST["sub"]
    );
    $ob->save_array("subject_student",$data6);

}



// search by id on attendance.php


//does not work

if(isset($_POST["student_update"]) ){
    $id=$_POST["id_number"];
    $v=$ob->search_value_by("student","student_id",$id);
    
    foreach($v as $key=> $value){
        $id= $value["student_id"];
        $firstname= $value["first_name"];
        $lastname= $value["last_name"];
        $address= $value["address"];
        $tel= $value["telephone"];
        $mail= $value["email"];
        $path=$value["path"];
        $status= $value["status"];
        $type= $value["type"];
        
    }
    }
   

// user login
if (isset($_POST["user_login"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
   //$pass=md5($password);

    $ob->login($username,$password);
}

//create account

if (isset($_POST["create_acc"])) {
	
		$uname=$_POST["username"];
		$utype= $_POST["un"];
        $logid= $_POST["login_id"];
		
		
        $pswrd= $_POST["password"];
		$pass=md5($pswrd);
		
    $data10 = array($uname,$pass,$utype,$logid); 
    
    $ob->save_array("login",$data10);
}

?>




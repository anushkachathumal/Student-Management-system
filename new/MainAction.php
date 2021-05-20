<?php    
session_start();
include ("db.php");

class wisdom extends db{

//function for data saving
        function save_array($table,array $d){

            $res=mysqli_query($this->db(),"insert into $table ( ".implode(",",array_keys($d))." )VALUES(' ".implode("','",array_values($d))." ')");
            
            if ($res) {
                echo "saved";
                header("location:addAdmin.php");
            }else {
                echo "not saved";
            }
        }
        
        function save($table,$d){
          
    $res=mysqli_query($this->db(),"insert into $table values(' ".implode("','",$d)." ')");
    if ($res) {
        echo "success";
    }else {
        echo "failed";
    }
        }
       
        

        function search_value_by($table,$field,$v){
		
            $result=mysqli_query($this->db(),"select * from $table where $field='$v'");
        
            $array=array();
        
            while ($row=mysqli_fetch_assoc($result)){
               
                $array[]=$row;
            }
       
            return $array;
        
        }


        //lookup table
        function search($table){
         $result=mysqli_Query($this->db(),"select * from $table");
        $array=array();
         while ($row=mysqli_fetch_assoc($result)) {
            $array[]=$row;
        }
        return $array;
        }



        
        function login($u,$p,$t){

          
                $res = mysqli_query($this->db(),"select * from login where username='$u' and password='$p' ");
                $array=array();
                $b=false;
                while($row = mysqli_fetch_assoc($res)){
                    $b=true;
                    $array[]=$row;
                    $usertype=$row["usertype"];
                    $_SESSION["username"]=$u;
        
                }
        
            if ($b) {
                
                  if ($usertype=="admin") {
                      header("location:adminreg.php");
                      
                  }elseif ($usertype=="student") {
                      header("location:student.php");
                  
                  }else{
                      header("location:register.php");
                  }
            }else{
                    header("location:login.html");
            }
            
        }

       
      
    }


$ob=new wisdom;



if(isset($_GET["searchat"])){

	$a=$_GET["searchat"];
	$v=$ob->search_Value_By("attendance","student_id",$a);

	foreach ($v as $key => $value) {
        $sid=$value["student_id"];
        $sfn= $value["first_name"];
       $sln= $value["last_name"];
}
}



if (isset($_POST["attend_save"])) {
   
   
   $data9 = array(
    "student_id"=> $_POST["student_id"],
    "first_name"=> $_POST["first_name"],
    "last_name"=> $_POST["last_name"]
);
$ob->save_array("attendance",$data9);

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

$data4 = array(
    "student_id"=> $_POST["id_number"],
    "parent_name"=> $_POST["parent_name"],
    "type"=> $_POST["guardian_type"],
     "telephone" =>$_POST["parent_tnumber"],
     "email" =>$_POST["parent_email"],
     "another_children" =>$_POST["siblings"]
); 
 
$ob->save_array("parent",$data4);

}

//admin reg

if (isset($_POST["student"])) {

    $data1 = array(
        "student_id"=> $_POST["id_number"],
        "first_name"=> $_POST["first_name"],
        "last_name"=> $_POST["last_name"],
         "address" =>$_POST["address"],
         "telephone" =>$_POST["phone_number"],
         "email" =>$_POST["email"]
    ); 
    
    $ob->save_array("student",$data1);
    
    $data2 = array(
        "student_id"=> $_POST["id_number"],
        "parent_name"=> $_POST["pn"],
        "type"=> $_POST["guardian_type"],
         "telephone" =>$_POST["parent_tnumber"],
         "email" =>$_POST["parent_email"],
         "another_children" =>$_POST["siblings"]
    ); 
     
    $ob->save_array("parent",$data2);
    
    $data5 = array(
        "student_id"=> $_POST["id_number"],
        "batch_name"=> $_POST["bat"]
    );
    $ob->save_array("student_batch",$data5);

    $data6 = array(
        "student_id"=> $_POST["id_number"],
        "subject_title"=> $_POST["sub"]
    );
    $ob->save_array("subject_student",$data6);

}


//data insert into teacher,admin,subject table


if (isset($_POST["saveTeacher"])) {

    $data_teacher = array(
        "teacher_id"=> $_POST["teacher_id"],
        "first_name"=> $_POST["first_name"],
        "last_name"=> $_POST["last_name"],
        "subject_name"=> $_POST["subject_name"],
        "address" =>$_POST["address"],
         "telephone" =>$_POST[ "telephone"],
         "email" =>$_POST["email"]
    ); 
    
    $ob->save_array("teacher",$data_teacher);
     

}





if(isset($_POST['saveSubject'])){
$data_subj = array(
       "subject_code"=> $_POST["subject_code"],
        "subject_name"=> $_POST["subject_name"],
        
        "details"=>$_POST["details"]
        
    ); 
    
    $ob->save_array("addsubject",$data_subj);

}


if(isset($_POST['saveAdmin'])){
$data_admin = array(
        "admin_id"=> $_POST["admin_id"],
        "first_name"=> $_POST["first_name"],
        "last_name"=> $_POST["last_name"],
        "ress" =>$_POST["address"],
        "telephone" =>$_POST[ "telephone"],
        "email" =>$_POST["email"]
    ); 
    
    $ob->save_array("admin",$data_admin);

}


//end




if(isset($_GET["searchId"])){

	$a=$_GET["searchId"];
	$v=$ob->search_Value_By("student","student_id",$a);

	foreach ($v as $key => $value) {
        $id=$value["student_id"];
        $fn= $value["first_name"];
       $ln= $value["last_name"];
       $tp=$value["type"];
  
}
}

if (isset($_POST["user_login"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $usertype=$_POST["usertype"];

    $ob->login($username,$password,$usertype);
}

?>


    
<?php

?>



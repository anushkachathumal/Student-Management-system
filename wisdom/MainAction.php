<?php    
//session_start();
include ("db.php");

class wisdom extends db{

//function for data saving 2 or more tables
        function save_array($table,array $d){

            $res=mysqli_query($this->db(),"insert into $table ( ".implode(",",array_keys($d))." )VALUES(' ".implode("','",array_values($d))." ')");
            
            if ($res) {
               header("location:success.php");
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

//function form login 
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
                      echo "sdgjsdfyt";
                  }elseif ($usertype=="student") {
                      header("location:student.php");
                      echo "sysd";
                  }else{
                      header("location:register.php");
                  }
            }else{
                    header("location:login.html");
            }
            
        }

        function search_value($table,$v,$field){
            echo "nooooooooo";
                $result=mysqli_query($this->db(),"select * from $table where $field='$v'");
            
                $array=array();
            
                while ($row=mysqli_fetch_assoc($result)){
                   
                    $array[]=$row;
                }
           
                return $array;
            
            }
      

    }


$ob=new wisdom;


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
    $st=$_POST["idnumber"];
    $cou=strlen($st);
    if ($cou==10) {
        # code...
    
    //student table
$data3 = array(
    "full_name"=> $_POST["fullname"],
    "id_num"=> $_POST["idnumber"],
    "address"=> $_POST["address"],
     "email" =>$_POST["email"],
     "telephone" =>$_POST["telephone"],
     "subject" =>$_POST["subject"]
); 

$ob->save_array("online_eenroll",$data3);
  }else{
     header("location:validationtryagain.php");
  } 

}
//admin do registration

if (isset($_POST["student"])) {
    //student table
    $data1 = array(
        "student_id"=> $_POST["id_number"],
        "first_name"=> $_POST["first_name"],
        "last_name"=> $_POST["last_name"],
         "address" =>$_POST["address"],
         "telephone" =>$_POST["phone_number"],
         "email" =>$_POST["email"]
    ); 
    
    $ob->save_array("student",$data1);
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
    $usertype=$_POST["usertype"];

    $ob->login($username,$password,$usertype);
}

//create account

if (isset($_POST["create_acc"])) {
    $data10 = array(
        "username"=> $_POST["username"],
        "password"=> $_POST["password"],
        "usertype"=> $_POST["un"],
        "login_id"=> $_POST["login_id"]

         
    ); 
    
    $ob->save_array("login",$data10);
}

?>




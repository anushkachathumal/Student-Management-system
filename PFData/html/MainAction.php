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
            header("location:success.php");
        } else {
            header("location:tryagain.php");
        }
        
        }

//delete function

function delete($table,$id){
	
    $result=mysqli_Query($this->db(),"DELETE  FROM $table WHERE  student_id='".$id."'");
    if ($result) {
            header("location:success.php");
        } else {
            header("location:tryagain.php");
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

function valid($table,array $d){



            $res=mysqli_query($this->db(),"insert into $table ( ".implode(",",array_keys($d))." )VALUES(' ".implode("','",array_values($d))." ')");
            
            if ($res) {

                 header("location:success.php");
               
            }else {
                echo "Check the Informations!";
            }
        }

function remove($table,$id){
    
    $result=mysqli_Query($this->db(),"DELETE  FROM $table WHERE  id_num='".$id."'");
    if ($result) {
        header("location:success.php");
    } else {
          header("location:.php");
    }
    }

//function form login 
        function login($u,$p,$t){

          
                $res = mysqli_query($this->db(),"select * from login where username='$u' and password='$p' ");
                $array=array();
                $b=false;
                while($row = mysqli_fetch_assoc($res)){
                    $b=true;
                    $array[]=$row;
                   
        
                }
        
            if ($b) {
                
                  if ($usertype=="admin") {

                      header("location:adminpannel.php");
                      
                  }elseif ($usertype=="student") {
                      header("location:profile/profile.php");
                      
                  }else{
                      header("location:profile/profile.php");
                  }
            }else{
                    header("location:adminpannel.php");
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

     $str=$_POST["teacher_id"];
    $count =strlen($str);
    if ($count==10) {

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
     }else{
        header("location:validationtryagainT.php");
     }

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

if (isset($_POST["s_delete"])) {
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


if (isset($_POST["s_update"])) {

    $id=$_POST["id_number"];
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $address=$_POST["address"];
    $telephone=$_POST["telephone"];
    $email=$_POST["email"];
    $path=$_POST["path"];
    $status=$_POST["status"];
    $type=$_POST["tp"];

$data1=array("$id","$first_name","$last_name","$address","$telephone","$email","$path","$status","$type");

$ob->update("student",$data1,$id);
    
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

$ob->save_array("online_enroll",$data3);
  }else{
     header("location:validationtryagain.php");
  } 

}


//admin do registration

if (isset($_POST["studentr"])) {
    //student table
    $str=$_POST["id_number"];
    $count =strlen($str);
    if ($count==10) {

        $data1 = array(
        "student_id"=> $_POST["id_number"],
        "first_name"=> $_POST["first_name"],
        "last_name"=> $_POST["last_name"],
         "address" =>$_POST["address"],
         "telephone" =>$_POST["gtel"],
         "email" =>$_POST["email"]
    ); 
    
    $ob->valid("student",$data1);
//parent table
    $data2 = array(
        "student_id"=> $_POST["id_number"],
        "parent_name"=> $_POST["gname"],
        "type"=> $_POST["pg"],
         "telephone" =>$_POST["gtel"],
         "email" =>$_POST["gemail"],
         "another_children" =>$_POST["sibling"]
    ); 
     
    $ob->valid("parent",$data2);
// student_batch   
    $data5 = array(
        "student_id"=> $_POST["id_number"],
        "batch_name"=> $_POST["year"]
    );
    $ob->valid("student_batch",$data5);
// subject_student
    $data6 = array(
        "student_id"=> $_POST["id_number"],
        "subject_title"=> $_POST["subjects"]
    );
    $ob->valid("subject_student",$data6);


    $data7 = array(

        "student_id"=> $_POST["id_number"],
        "username"=> $_POST["username"],
        "password"=> md5($_POST["password"]),
        "usertype"=> $_POST["usertype"]
       
           );
    $ob->valid("login",$data7);
    }else{
          header("location:validationtryagain.php");
    }
    
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
   
if (isset($_POST["s_search"])) {
    $id=$_POST["id_number"];
    $v=$ob->search_value_by("student","student_id",$id);

     foreach($v as $key=> $value){
        $id=$value["student_id"];
        $firstname=$value["first_name"];
        $lastname=$value["last_name"];
        $address=$value["address"];
        $tel=$value["telephone"];
        $mail=$value["email"];
        $path=$value["path"];
        $status=$value["status"];
        $type=$value["type"];
        
    }
}

if (isset($_POST["oe_search"])) {
    $id=$_POST["idnumber"];
    $v=$ob->search_value_by("online_enroll","id_num",$id);

     foreach($v as $key=> $value){
       $fullname= $value["full_name"];
        $idn= $value["id_num"];
        $address= $value["address"];
        $email= $value["email"];
        $telephone= $value["telephone"];
        $subject= $value["subject"];
        
    }
}

if (isset($_POST["oe_delete"])) {
    $id=$_POST["idnumber"];
        $ob->remove("online_enroll",$id);
    
    
    }
// user login
if (isset($_POST["login_user"])) {
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
    $usertype=$_POST["usertype"];

    $ob->login($username,$password,$usertype);
}

//save sub 
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
        "address" =>$_POST["address"],
        "telephone" =>$_POST[ "telephone"],
        "email" =>$_POST["email"]
    ); 
    
    $ob->save_array("admin",$data_admin);


     $data71 = array(

        
        "username"=> $_POST["username"],
        "password"=> md5($_POST["password"]),
        "usertype"=> "admin"
       
           );
    $ob->save_array("login",$data71);

}

if (isset($_POST["paymentb"])) {
    
    $data80 = array(

        "studentName" => $_POST["firstname"],
        "studentId"   => $_POST["stId"],
        "month"       => $_POST["month"],
        "total_fee"      => $_POST["fees"]
    );
    $ob->save_array("payments",$data80);
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




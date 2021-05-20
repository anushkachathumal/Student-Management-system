<?php

class db{
	var $con;
	function db(){
	$this->$con=mysqli_connect("localhost","root","","wisdom");
	
		return $this->$con;
	
	
			
	}
}

?>

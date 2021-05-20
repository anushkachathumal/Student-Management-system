<?php
	class dbconnect{
		var $con;
		
		function dbc(){
			$this->con=mysqli_connect("localhost","root","","wisdom");
			return $this->con;
			
		}
	}
?>
<?php
   $url='127.0.0.1:3306';
   $username='root';
   $password='';
   $conn=mysqli_connect($url,$username,$password,"users");
   if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
   }
?>
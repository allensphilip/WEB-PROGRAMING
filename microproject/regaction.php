<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$confirmpassword=$_POST['confirmpassword'];
    if($pass == $confirmpassword)
    {
        $sql = "INSERT INTO `userlogin` ( `username`, `email`, `pass`, `confirmpassword`) VALUES ( '$username', '$email', '$pass', '$confirmpassword')";
        $result=$conn->query($sql);
        if($result==TRUE)
        {
	        echo "Registration Sucess";
			die(header('location:http://localhost/microproject/login.html'));
        }
        else
        {      
	        echo "Error".$sql."<br>".$conn->error;
        }
    }
    else{
        echo "password doesn't match";
    }
    $conn->close();
}
?>

<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobileno'];
	$address=$_POST['address'];
    $gender=$_POST['gender'];
    
    
    $sql = "INSERT INTO `userdetails` ( `name`, `email`, `mobileno`, `address`, `gender`) VALUES ( '$name', '$email', '$mobileno', '$address', '$gender')";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
        echo "Registration Sucess";
        die(header('location:http://localhost/microproject/userpanel.php'));
    }
    else
    {      
        echo "Error".$sql."<br>".$conn->error;
    }
}
?>
<html>
    <head>
        <title>Update Details</title>
        <link rel="stylesheet" type="text/css" href="reg.css">
	<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main" align="center">  	
		    <input type="checkbox" id="chk" aria-hidden="true">
        
                <div class="signup">
			        <form method="POST" action="">
				        <label id="headlabel"for="" aria-hidden="false">Update Details</label>
				        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
				        <input type="number" name="mobileno" placeholder="Mob. No" required="">
				        <input type="text" name="address" placeholder="Address" required="">
                        <select id="gender" name="gender">
                            <option value="male">male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
				        <button type="submit" name="submit">Submit Details</button>
                    </form>
                </div>
        </div>
	</body>
</html>
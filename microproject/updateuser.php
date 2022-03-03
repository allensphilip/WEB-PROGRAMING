<?php 
session_start();
include "config.php";

    if (isset($_POST['update'])) 
    {
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobileno = $_POST['mobileno'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $sql = "UPDATE `userdetails` SET `name`='$name',`email`='$email',`mobileno`='$mobileno',`address`='$address',`gender`='$gender' WHERE `uid`='$uid'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) 
        {

            echo "Record updated successfully."; 

        }else
        {

            echo "Error:" .$sql. "<br>" . $conn->error;

        }

    } 

?>
<html>
    <head>

	<link rel="stylesheet" href="style.css">
    </head>
	<body>
            <center>
		        <form method="POST" action="">

			        <h1>Updation</h1>
                    <input type="hidden" name="uid">
                    <label for="">Name</label>
			        <input type="text" name="name"value="" ><br>
                    <label for="">Email</label>
			        <input type="email" name="email" value="" ><br>
                    <label for="">Mobile Number</label>
			        <input type="number" name="mobileno" value=""> <br>   
                    <label for="">Address</label>        
			        <input type="text" name="address" value=""><br>
                    <label for="">Gender</label>
                    <select id="gender" name="gender" selected="">
                        <option value="male">male</option>
                        <option value="female">Female</option>
                        <option value="transgender">Transgender</option>
                    </select><br>
			        <br>
			        <input type="submit" name="update" value="Update">
		        </form> 
            </center>             
    </body>
</html>
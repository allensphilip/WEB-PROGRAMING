<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$arrive=$_POST['arrive'];
	$depart=$_POST['depart'];
	$people=$_POST['people'];
    $ac=$_POST['ac'];
    $bedding=$_POST['bedding'];
    $comments=$_POST['comments'];
    $sql = "INSERT INTO `roombook` ( `email`, `arrive`, `depart`, `people`, `ac`, `bedding`, `comments`) VALUES ( '$email', '$arrive', '$depart', '$people', '$ac', '$bedding', '$comments'";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
	    echo "booking sucess";
        die(header('location:http://localhost/microproject/userpanel.php'));
    }
    else
    {      
	    echo "Error".$sql."<br>".$conn->error;
    }

    $conn->close();
}
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="reg.css">
	    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="main" align="center">  	

		<div class="signup">
            <form action="" method="POST">
                
                <h2 class="heading"><u>Details</u></h2>
                <input type="date" id="email" name="email" value="<?php echo date('Y-m-d'); ?>"/>
                <h4>Arrival Date</h4>
                <input type="date" id="arrive" name="arrive" value="<?php echo date('Y-m-d'); ?>"/>   
                <h4>Depart Date</h4>  
                <input type="date" id="depart" name="depart" value="<?php echo date('Y-m-d'); ?>"/> 
                <h4>No of Persons</h4>
                <input type="number" id="depart" name="people"/>  
                <h4>Room(AC/Non-AC)</h4>
                <select class="floatLabel" name="ac">
                    <option value="AC" selected>AC</option>
                    <option value="NON-AC">Non-AC</option>
                </select>
                <h4>Bedding</h4>
                <select class="floatLabel" name="bedding">
                    <option value="blank" selected></option>
                    <option value="single-bed">Single</option>
                    <option value="double-bed">Double</option>
                </select>
    
                <h12>Please describe your needs. eg: extra beds </h12>
                <br>
                <textarea name="comments" id="comments"></textarea>
                <button type="submit" value="Submit" class="col-1-4">Submit</button>  
            </form>
        </div>  
    </div>      
    </body>
</html>
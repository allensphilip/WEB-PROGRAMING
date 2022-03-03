<?php 

include "config.php"; 
echo $_GET["uid"];
if(isset($_GET['uid']))
{

    $uid = $_GET['uid'];

    $sql1 = " DELETE FROM  `userdetails` WHERE `uid` = '$uid' ";

     $result1 = $conn->query($sql1);

     if ($result1 == TRUE) 
     {

        echo '<script>alert("User details deleteed sucessfully")</script>';
        die(header('location:http://localhost/microproject/adminhome.php'));

    }
    else
    {

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
else {
    echo "<br>can't delete yet now";
}

?>
<?php 
include "config.php"; 
if(isset($_GET['delete']))
{

    $id = $_GET['id'];

    $sql1 = " DELETE FROM  `userlogin` WHERE `id` = '$id' ";

     $result1 = $conn->query($sql1);

     if ($result1 == TRUE) 
     {

        echo "Record deleted successfully.";

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
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="">
            <label for="">Enter your id:</label>
            <input type="number" id="id">
            <button name="delete">DELETE</button>
        </form>
    </body>
</html>
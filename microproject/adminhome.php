<?php
include "config.php";
$sql = " SELECT * FROM `userdetails`" ;
$result=$conn->query($sql);
?>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
			<br>
			<table border="1"; align="center"; bgcolor="white">
				<tr><th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Gender</th>
				</tr>
				<?php
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
				?>
				<tr>
				<td><?php echo $row['uid'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobileno'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><a href="deleteuser.php?uid=<?php echo $row['uid'];?>">Delete user</a></td>
				<td><a href="updateuser.php?uid=<?php echo $row['uid'];?>">Update user details</a></td></tr>
				<?php
					}
				}
				?>
			</table>
                
        </div>
	
   </body>
</html>


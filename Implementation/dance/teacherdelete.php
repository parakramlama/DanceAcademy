<?php
include 'connect.php';
$qry_del="DELETE FROM staff WHERE id='$_GET[id]'";
if($conn->query($qry_del) == FALSE)
{
	die("Connection Failed: ".$conn->error);
}

{
	header("Location: staffs.php");
}
echo "User deleted";
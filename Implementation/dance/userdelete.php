<?php
include 'connect.php';
$qry_del="DELETE FROM users WHERE id='$_GET[id]'";
if($conn->query($qry_del) == FALSE)
{
die("Connection Failed: ".$conn->error);
}

{
header("Location: membersdetails.php");
}
echo "User deleted";
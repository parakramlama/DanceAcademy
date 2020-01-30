<?php
include 'connect.php';
$qry_del="DELETE FROM uniforms WHERE id='$_GET[id]'";
if($conn->query($qry_del) == FALSE)
{
die("Connection Failed: ".$conn->error);
}
echo "Uniform deleted";
{
header("Location: uniformsdetails.php");

}
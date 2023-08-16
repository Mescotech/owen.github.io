<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "studio";



if(!$con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}
?>


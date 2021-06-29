<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
echo "connection unsuccessful";
else{
$d="CREATE DATABASE restaurant";
if($cc->query($d)==true){
$cc=mysqli_connect("localhost","root","","restaurant");
}
$s="CREATE TABLE rest(itemname VARCHAR(25),itype VARCHAR(25),quantity VARCHAR(25),price INT)";
if($cc->query($s))
    {echo "table created";}
}
$cc->close();

?>
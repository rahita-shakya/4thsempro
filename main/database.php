<?php
$server="localhost";
$user= "root";
$password= "";
$db="schema";
$conn=mysqli_connect($server,$user,$password,$db);
if($conn)
{
    echo "database is connected";
}else{
    die("database is not connected");
}
?>
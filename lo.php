<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "agro";
$uname="Debangsu";
$pass="IWPProject1";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{ 
    $result=mysqli_query($conn, "select username,password from username where username='".$uname."' and password='".$pass."';") or die("Failed to query database".mysqli_error($conn));
if($uname== "Debangsu" && $pass=="IWPProject1"){ echo "Success".$uname;}
}
?>
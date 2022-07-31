<?php 
$name=test_input($_POST['name']); 
$uname=test_input($_POST['uname']); 
$pass=test_input($_POST['pass']); 
$email=test_input($_POST['email']); 
$phno=test_input($_POST['phno']); 
$card=test_input($_POST['card']); 
$address=test_input($_POST['address']); 

require_once "config.php";

$sql="insert into user(name,username,password,address,email,phone_no,agri_card) values 
('$name','$uname','$pass','$address','$email','$phno','$card')"; 
if(!mysqli_query($conn, $sql)){ 
echo "<script> 
alert('Error!!!!Create account again'); 
window.location='signup.html'; 
</script>"; 
} 
else{ 
echo "<script> 
alert('Account Created Successfully'); 
window.location='login.php'; 
</script>" ; 
} 

function test_input($data){ 
$data=trim($data); 
$data=stripslashes($data); 
return $data; 
} 
mysqli_close($conn); 
?>
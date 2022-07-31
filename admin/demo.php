<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "agro";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `product`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){
    while($row=mysqli_fetch_assoc($result))
    { 
        $pcode=$row["pcode"]; 
        $pname=$row["pname"]; 
        $price=$row["price"]; 
        $quantity=$row["quantity"]; 
        $type=$row["type"]; 
        $brand=$row["brand"]; 
        $pin=$row["pin"]; 
        //$image=$row["image"]; 
        $dynamicList =`
        <table width='100%' border='1' cellspacing='0' cellpadding='6'> 
        <tr> 
        <td width='30%' valign='top'><img style='border:#666 1px solid;' src='images/".$pcode.".jpg' 
        alt=".$pname." width='100' height='220' border='1'></td> 
        <td width='70%' valign='top' style='color:white;'><h5>Product Code: ".$pcode."</h5><br> 
        <h4>Product Name: ".$pname."</h4><br> 
        <h3>$".$price."</h3><br> 
        <h5>Quantity: ".$quantity."</h5><br> 
        <h5>Type: ".$type."</h5><br> 
        <h5>Brand: ".$brand."</h5><br> 
        <h5>Brand: ".$pin."</h5><br> 
        </tr> 
        </table> 
        `; 
         
        echo $dynamicList; 
        mysqli_close($conn);
    }

}
else{

    echo "No products";
}

?>

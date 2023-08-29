<?php
$price = $_POST["price"];
//conneccting to mysql database
$connection = mysqli_connect("Localhost","root","","inventory");
// if($connection){
//     echo "connected successfully";
// }else{
//     echo "something went wrong";
// }

$sql = "INSERT INTO price (price) values('$price')";
$result = mysqli_query($connection,$sql);
if($result){
    echo "Price added successfully";
}else{
    echo "somehng went wrong";
}

echo "<br>";
echo  '<a href="price.php">Go back</a>'; 
?>
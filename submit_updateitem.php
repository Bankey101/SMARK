<?php
$id = $_POST["itemid"];
$nqty = $_POST["newitem"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE item SET qty = $nqty WHERE id =".$id;
mysqli_query($connection,$sql);
echo "Item Quantity updated  successfully";

echo "<br>";
echo  '<a href="sales.php">Go back</a>'; 
?>
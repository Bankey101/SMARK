<?php
$h = $_POST["h"];
$w = $_POST["w"];
$id =$_POST["id"];
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "UPDATE image_pic SET h = '$h', w = '$w' WHERE userid =".$id;
mysqli_query($connection,$sql);
header("Location:image.php");

?>
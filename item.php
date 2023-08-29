<?php session_start();
if(!isset($_SESSION["username"])){
header("Location:error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> welcome <?= $_SESSION["username"]?></h1>
    <br>
    <?php
     //conneccting to mysql database
$connection = mysqli_connect("Localhost","root","","inventory");
$sql = "SELECT * FROM image_pic WHERE userid =".$_SESSION["user_id"];
$result = mysqli_query($connection, $sql);
while($rows = mysqli_fetch_assoc($result)){
    $img = $rows["image_name"];
}
    ?>
    <p> <img src="<?php echo $img; ?>" height="100px" width="100px"/> </p>
    <br>
    <?php include('navlinks.php'); ?>
    <form method="post" action="submit_item.php">
        <label>Item Name</label>
        <input type="text" name="item">

        <label>Item quantity</label>
        <input type="number" name="qty">

        <label>Select Item price</label>
        <select name="itemprice">
        <?php 
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM price";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r))
            {
                echo '<option value='.$rows["id"].'>'.$rows["price"].'</option>';
            }
        ?>
           
        </select>

        <label>date of entry</label>
        <input type="date" name="itemdate">

        <label>Select Storekeeper Name</label>
        <select name="storekeeper">
        <?php 
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","inventory");
            //preparing sql query to retrieve data from database
            $sql = "SELECT * FROM storekeeper";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
                echo '<option value='.$rows["id"].'>'.$rows["skname"].'</option>';
            }
        ?>
           
         
        </select>
    <button> Add Item </button>
    </form>
</body>
</html>
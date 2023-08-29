<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List</h1>
    <?php 
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","inventory");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM storekeeper";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    echo $numofrows;
    ?>
    <table border="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>STOREKEEPER NAME</td>
                <td>ACTIONS</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
                    <tr>
                        <td>'.$rows["id"].'</td>
                        <td>'.$rows["skname"].'</td>
                        <td><a href="storekeeperedit.php?storekeeperid='.$rows["id"].'">Edit</a></td>
                    </tr>';
               }
            }
            ?>
        </tbody>
    </table>
<?php 
echo "<br>";
echo  '<a href="storekeeper.php">Go back</a>'; 
?>
</body>
</html>
<?php
$itemname = $_POST["itemname"];
$itemqty =  $_POST["itemqty"];
$itemprice = $_POST["itemprice"];
$sellqty = $_POST["sellqty"];
$itemid = $_POST["itemid"];
$skid  = $_POST["sk_id"];
if($itemqty >= $sellqty){
    $finallqty = $itemqty - $sellqty;
    $sellprice = $sellqty * $itemprice;
    echo "Hi, you have sold ".$sellqty." ".$itemname."(s)  at the rate of $".$itemprice;
    echo "<br>";
    echo "Total amount for ".$sellqty." ".$itemname."(s) is $".$sellprice;
    $connection = mysqli_connect("Localhost","root","","inventory");
    $sql = "UPDATE item SET qty = $finallqty WHERE id =".$itemid;
    mysqli_query($connection,$sql);

    $sql2 = "INSERT INTO sales (item_id,st_id,item_qty,amount)
           VALUES('$itemid','$skid','$sellqty','$sellprice')";
           mysqli_query($connection,$sql2);

}else{
    echo "oops, you cannot sell more than the available quantity";
}
?>
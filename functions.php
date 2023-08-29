<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
<label>a</label>

    <input type="number" name="a" id="a"  placeholder="Value" >
    <br>
    <label>b</label>
    <input type="number" name="b" id="b" placeholder="Value">
    <br>
    <label>h</label>
    <input type="number" name="h" id="h" placeholder="Value">
    <br>
    <button name="submit" onclick="return chk()">calculate</button>
    </form>
    <input type="text" id="show" placeholder="Result shown here...">
    <br>
    <script>
        function chk(){
        let a = document.getElementById("a").value;
        let b = document.getElementById("b").value;
        let h = document.getElementById("h").value;
        if(a == ""){
            alert("Enter a value");
            return false;
            }
            if(b == ""){
            alert("Enter b value");
            return false;
            }
            if(h == ""){
            alert("Enter h value");
            return false;
            }
        }
   </script>
</body>
</html>
<?php

function addnum($p,$l){
    $a = $p;
    $b = $l;
    //echo $a + $b;
}

addnum(4,8);

function areaOfTrapezium($a,$b,$h){
 echo (($a +$b)/ 2)* $h;
}
if(isset($_GET["submit"])){
$a = $_GET["a"];
$b = $_GET["b"];
$h = $_GET["h"];
areaOfTrapezium($a,$b,$h);
}

?>
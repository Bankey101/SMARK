<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AREA OF TRAPEZIUM</h1>
    <hr>
    <h1><p id="ans"></p></h1>
    <hr>
    <br>
    <label>a</label>
    <input type="number" name="a" id="a" placeholder="Value"  >
    <br>
    <label>b</label>
    <input type="number" name="b" id="b" placeholder="Value" >
    <br>
    <label>h</label>
    <input type="number" name="h" id="h" placeholder="Value" onkeyup="cal()">
    <br>
    <label>Area is : </label>
    <input type="text" name="h" id="show" placeholder="show answer"onkeyup="cal()">
    <script>
 
 function cal(){
    let a  =  parseFloat(document.getElementById("a").value);
    let b  = parseFloat(document.getElementById("b").value);
    let h  = parseFloat(document.getElementById("h").value);
    let result = ((a + b)/2) * h;
    document.getElementById("ans").innerHTML = result;
    document.getElementById("show").value = result;
 }
    </script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{

$l=$_POST['l'];
$b=$_POST['b'];
$area=$l*$b;
echo"area".$area;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="swap" action="" method="post">
l:<input type="text" name="l" value="" placeholder="enter value of length">
b:<input type="text" name="b" value="" placeholder="enter value of breadth">

<input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>
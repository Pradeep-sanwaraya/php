<?php
if(isset($_POST['submit']))
{

$a=$_POST['a'];
$b=$_POST['b'];
$add=$a+$b;
$multi=$a*$b;
$substraction=$a-$b;
$divide=$a+$b;
echo"add=".$add."substraction=".$substraction."multi".$multi."divide".$divide;
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
a:<input type="text" name="a" value="" placeholder="enter value of a">
b:<input type="text" name="b" value="" placeholder="enter value of b">

<input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>
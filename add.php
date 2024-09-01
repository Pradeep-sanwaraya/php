<?php
if(isset($_POST['add']))
{

$a=$_POST['a'];
$b=$_POST['b'];
$add=$a+$b;
echo"addition of a and b is".$add;
}
if(isset($_POST['sub']))
{

$a=$_POST['a'];
$b=$_POST['b'];
$sub=$a-$b;
echo"substraction of a and b is".$sub;
}
if(isset($_POST['mul']))
{

$a=$_POST['a'];
$b=$_POST['b'];
$mul=$a*$b;
echo"multiplication of a and b is".$mul;
}
if(isset($_POST['div']))
{

$a=$_POST['a'];
$b=$_POST['b'];
$div=$a+$b;
echo"division of a and b is".$div;
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

<botton><input type="submit" name="add" value="add"></botton>
<input type="submit" name="sub" value="sub">
<input type="submit" name="mul" value="mul">
<input type="submit" name="div" value="div">
<input type="submit" value="add">
</form>
    
</body>
</html>
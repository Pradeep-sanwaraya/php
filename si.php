<?php
if(isset($_POST['submit']))
{
$p=$_POST['p'];
$r=$_POST['r'];
$t=$_POST['t'];
echo $si=($p*$r*$t)/100;
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
<form name="si" action="" method="post">
principal:<input type="text" name="p" value="" placeholder="enter principal">
rate:<input type="text" name="r" value="" placeholder="enter rate">
time:<input type="text" name="t" value="" placeholder="enter time">
<input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>
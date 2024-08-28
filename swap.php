<?php
if(isset($_POST['submit']))
{

$a=$_POST['a'];
$b=$_POST['b'];
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo"a=".$a."b=".$b;
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
<form name="swap"  action=""  method="post">
a:<input type="text" name="a" value="<?php echo $a; ?>">

<input type="submit" name="submit" value="<=>">

b:<input type="text" name="b" value="<?php echo $b; ?>">


</form>
    
</body>
</html>
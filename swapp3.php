<?php
if (isset($_POST['swap'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  // Swap values
  $temp = $num1;
  $num1 = $num2;
  $num2 = $temp;
}
?>

<form action="" method="post">
  <label for="num1">Number 1:</label>
  <input type="text" id="num1" name="num1" value="<?php if (isset($_POST['swap'])){ echo $num1; }?>">
  <br><br>
  <input type="submit" name="swap" value="<=>">
  <label for="num2">Number 2:</label>
  <input type="text" id="num2" name="num2" value="<?php if (isset($_POST['swap'])){ echo $num2; }?>">
  <br><br>
  <input type="submit" name="swap" value="Swap">
</form>
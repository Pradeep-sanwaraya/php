<?php

$balance = 2000;

$notes = array(100, 50, 20, 10, 5, 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $amount = $_POST["amount"];


    if (isset($_POST["submit"])) {

        if ($amount > 0 && $amount <= $balance) {
        
            $balance -= $amount;
            echo "You have withdrawn $" . $amount . ". Your new balance is $" . $balance;

            
            $noteCount = array();
            foreach ($notes as $note) {
                $count = floor($amount / $note);
                $amount %= $note;
                $noteCount[$note] = $count;
            }

            
            echo "<br>Note count:<br>";
            foreach ($noteCount as $note => $count) {
                if ($count > 0) {
                    echo "$" . $note . " x " . $count . "<br>";
                }
            }
        } else {
            echo "Invalid amount or insufficient balance.";
        }
    }

    
    elseif (isset($_POST["deposit"])) {
        
        if ($amount > 0) {
        
            $balance += $amount;
            echo "You have deposited $" . $amount . ". Your new balance is $" . $balance;
        } else {
            echo "Invalid amount.";
        }
    }

    elseif (isset($_POST["balance"])) {
        echo "Your current balance is $" . $balance;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Interface</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">ATM Interface</th>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="text" name="amount" value="" placeholder="Enter your amount">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Withdraw">
                </td>
                <td>
                    <input type="submit" name="deposit" value="Deposit">
                </td>
                <td>
                    <input type="submit" name="balance" value="Check Balance">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
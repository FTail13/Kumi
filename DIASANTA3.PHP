~~~ORDER

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-size: 18px;
        }
        h1 {
            font-size: 35px;
        }
        table {
            width: 20%;
            margin-bottom: 20px;
        }
        th, td {
            padding: 5px;
            text-align: left;
            font-size: 18px;
        }
        label {
            font-size: 20px;
        }
        input[type="number"] {
            font-size: 18px;
            padding: 3px;
            width: 20%;
            box-sizing: border-box;
            margin-top: 3px;
        }
        select {
            font-size: 16px;
            padding: 4px;
            width: 8%;
            box-sizing: border-box;
            margin-top: 3px;
        }
        input[type="submit"] {
            font-size: 18px;
            padding: 5px 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table border="1">
        <tr>
            <th>Order</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>
    <form action="DIASANTA3.PHP" method="POST">
        <label for="order">Select an order</label>
        <select name="order" id="order">
            <option value="burger">Burger</option>
            <option value="fries">Fries</option>
            <option value="steak">Steak</option>
        </select>
        <br><br>
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" required>
        <br><br>
        <label for="cash">Cash</label>
        <input type="number" id="cash" name="cash" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

~~~RECEIPT
<?php
date_default_timezone_set('Asia/Manila');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    $menu = array(
        "burger" => 50,
        "fries" => 75,
        "steak" => 150
    );
    $total = $menu[$order] * $quantity;
    $style = "border:2px dotted black; padding:10px; width:100%; font-weight:bold; font-size:30px;";
    $style1 = "border:2px dotted red; padding:10px; width:100%; font-weight:bold; font-size:30px;";
    if ($cash >= $total) {
        $change = $cash - $total;
        $currentDateTime = date('m/d/Y h:i:s a', time());
        echo "<div style='$style'>
                <h2 style='text-align:center;'>RECEIPT</h2>
                <div style='text-align:left;'>
                    <p>Total Price: $total</p>
                    <p>You Paid: $cash</p>
                    <p>CHANGE: $change</p>
                    <p>$currentDateTime</p>
                </div>
              </div>";
    } else {
        echo "<div style='$style1'>
                <h2 style='text-align:left;'>Sorry, balance not enough.</h2>
              </div>";
    }
}
?>
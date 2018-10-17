<?php
    $first = $_GET["firstName"];
    $last = $_GET["lastName"];
    $address = $_GET["address"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Order Receipt</title>
    </head>
    <body>
        <h1>Thanks so much for your order, <?php echo "$first $last" ?>!</h1>
        <h2>Shipping adress:</h2>
        <p><?php echo $address ?></p>
    </body>
</html>
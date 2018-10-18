<?php 
    $first_string = empty($_GET["first_string"]) ? 0 : $_GET["first_string"];
    $second_string = empty($_GET["second_string"]) ? 0 : $_GET["second_string"];
    $third_string = empty($_GET["third_string"]) ? 0 : $_GET["third_string"];
    $fourth_string = empty($_GET["fourth_string"]) ? 0 : $_GET["fourth_string"];
    $fifth_string = empty($_GET["fifth_string"]) ? 0 : $_GET["fifth_string"];

    $prices = array($first_string, $second_string, $third_string, $fourth_string, $fifth_string);
    $total_price = 0;
    foreach ($prices as $current_price) {
        $total_price = $total_price + $current_price;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sum up</title>
</head>
<body>
    <h1>Total Cost:</h1>
    <p>$<?php echo $total_price; ?></p>
</body>
</html>
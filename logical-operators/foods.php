<?php 
    $dish = $_GET["dishName"];
    $result = canYouEat($dish);

    function canYouEat($value) {
        if ($value == "fish" || $value == "pineapple") {
            return "You cannot eat it.";
        } else {
            return "You can eat it.";
        }
    };
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logical Operators</title>
</head>
<body>
    <p><?php echo $result; ?></p>
</body>
</html>
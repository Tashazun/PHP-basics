<?php 
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"]; 
    $divide1 = $first_number / 20;
    $divide2 = $second_number / 20;
    $solution = $divide1 + $divide2;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sum up</title>
</head>
<body>
    <h1>Estimated Cost:</h1>
    <p>$<?php echo $solution; ?></p>
</body>
</html>
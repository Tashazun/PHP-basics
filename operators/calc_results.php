<?php 
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"]; 
    $op1 = $second_number - $first_number;
    $solution = $op1 * 4;
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
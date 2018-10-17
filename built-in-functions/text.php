<?php 
    $first_string = $_GET["first_string"];
    $second_string = $_GET["second_string"];
    $third_string = $_GET["third_string"];
    $fourth_string = $_GET["fourth_string"];
    $upper_text = strtoupper($first_string);
    $count_text = str_word_count($second_string);
    $shuffle_text = str_shuffle($third_string);
    $e_text = stripos($fourth_string, 'e');
?>
<html>
<head>
    <title>String Print</title>
</head>
<body>
    <h1>Here ya go!</h1>
    <p><?php echo $upper_text; ?> </p>
    <p><?php echo $count_text; ?> </p>
    <p><?php echo $shuffle_text; ?> </p>
    <p><?php echo $e_text; ?> </p>
</body>
</html>
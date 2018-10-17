<?php 
    $message1 = $_GET["message1"];
    $message2 = $_GET["message2"];
    $message3 = $_GET["message3"];
    $new_strings = encode($message1, $message2, $message3);

    function encode($phrase1, $phrase2, $phrase3)
    {
        $reversed_phrase = strrev($phrase1);
        $capitalized_phrase = strtoupper($phrase2);
        $reverse2 = strrev($phrase3);
        $cap_reverse = strtoupper($reverse2);
        $solution = $reversed_phrase . " " . $capitalized_phrase . " " . $cap_reverse;
        return $solution;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Encrypt a Message</title>
</head>
<body>
    <div class="container">
        <h1>Message encrypted!</h1>
        <h2>Here you go: <?php echo $new_strings ?></h2>
    </div>
</body>
</html>
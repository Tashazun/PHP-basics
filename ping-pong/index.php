<?php
$arr = array();

function pingPong($input) {
        global $arr;
        if ($input < 0) return;
        array_push($arr, $input);
        pingPong($input - 1);
    }

pingPong(25);
$count = array_reverse($arr);
foreach($count as $key => $val) {
    if ($key % 3 === 0 && $key % 5 === 0) {
        array_splice($count, $key, 1, "pingpong");
    } 
    else if ($key % 5 === 0) {
        array_splice($count, $key, 1, "pong");
    }
    else if ($key % 3 === 0) {
        array_splice($count, $key, 1, "ping");
    }
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>
            <ul>
                <?php
                    foreach($count as $val => $content) {
                        echo "<li>" . "$content" . "</li>";
                    }
                ?>
            </ul>
        </div>
    </body>
</html>
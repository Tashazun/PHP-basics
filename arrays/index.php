<?php
    $flavors = array("chocolate", "cherry", "honey", "mapple");
    $second_flavor = $flavors[1];
    array_splice($flavors, 1, 1);

    $movies = array("The Room", "Manos: Hands of Fate", "CHUD", "Troll2", "Frozen");
    array_push($movies, "House on Haunted Hill", "Looper");

    $books = array("3 Body Problem", "Watership Down", "Leviathan Wakes", "The Fifth Season", "Hell House", "The Thief of Always", "Neverwhere", "Whale Rider");
    $even_books = array();
    foreach($books as $key => $val) {
        if ($key % 2 !== 0) {
            array_push($even_books, $val);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>
            <h2><?php echo $second_flavor ?></h2>
            <h4><?php var_dump($flavors) ?></h4>
            <h2><?php var_dump($movies) ?></h2>
            <h2><?php var_dump($even_books) ?></h2>
        </div>
    </body>
</html>
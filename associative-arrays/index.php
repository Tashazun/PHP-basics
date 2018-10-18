<?php
    $cd_prices = array("first ablum" => 12.45, "second album" => 10.50, "third album" => 23.45, "fourth album" => 14.62);
    $tour_dates = array("Portland" => "Oct. 9th", "San Fran." => "Oct. 12th", "Las Vegas" => "Oct. 23rd", "Austin" => "Nov. 1st", "Chicago" => "Nov. 5th", "D.C" => "Nov. 10th");
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>
            <h2>CD Price List:</h2>
            <ul>
                <?php
                    foreach ($cd_prices as $name => $price) {
                        echo "<li>" . "$name: $price" . "</li>";
                    }
                ?>
            </ul>
            <h2>Tour Dates</h2>
            <ul>
                <?php
                    foreach ($tour_dates as $city => $date) {
                        echo "<li>" . "$city- $date" . "</li>";
                    }
                ?>
            </ul>
        </div>
    </body>
</html>
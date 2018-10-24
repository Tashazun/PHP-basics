<?php
    class Parcel {
        private $height;
        private $width;
        private $length;
        private $weight;

        function __construct($height, $width, $length, $weight) {
            $this->height = $height;
            $this->width = $width;
            $this->length = $length;
            $this->weight = $weight;
        }

        function setHeight($new_height) {
            if (!is_numeric($new_height)) {
                throw new Exception('Height must be a number.');
            }
            $this->height = $new_height;
        }
        function setWidth($new_width) {
            if (!is_numeric($new_width)) {
                throw new Exception('Width must be a number.');
            }
            $this->width = $new_width;
        }
        function setLength($new_length) {
            if (!is_numeric($new_length)) {
                throw new Exception('Length must be a number.');
            }
            $this->length = $new_length;
        }
        function setWeight($new_weight) {
            if (!is_numeric($new_weight)) {
                throw new Exception('Weight must be a number.');
            }
            $this->weight = $new_weight;
        }

        function getHeight() {
            return $this->height;
        }
        function getWidth() {
            return $this->width;
        }
        function getLength() {
            return $this->length;
        }
        function getWeight() {
            return $this->weight;
        }
    }

    $package = new Parcel(1,1,1,1);
    $package->setHeight($_GET["height"]);
    $package->setWidth($_GET["width"]);
    $package->setLength($_GET["length"]);
    $package->setWeight($_GET["weight"]);
    $package_volume = volume($package->getHeight(), $package->getWidth(), $package->getLength());
    $shipping_price = costToShip($package_volume, $package->getWeight());

    function volume($h, $w, $l) {
        return $h * $w * $l;
    }

    function costToShip($v, $w) {
        return $v * $w;
    }
?>

<html>
<head>
    <title>Price Results</title>
</head>
<body>
    <h1>Estimated Price of Shipping:</h1>
    <ul>
        <?php 
            echo "<h1> $package_volume </h1>
                    <h2> $shipping_price </h2>"
        ?>
    </ul>
</body>
</html>
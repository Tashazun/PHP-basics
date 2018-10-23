<?php
    class Car {
        private $make_model;
        private $price;
        private $miles;
        private $img_path;

        function __construct($make_model, $price, $miles, $img_path) {
            $this->make_model = $make_model;
            $this->price = $price;
            $this->miles = $miles;
            $this->img_path = $img_path;
        }

        function setCar($new_type) {
            if (!is_string($new_type)) {
                throw new Exception('Make/Model must be a string.');
            }
            $this->make_model = $new_type;
        }
        function setPrice($new_price) {
            if (!is_numeric($new_price)) {
                throw new Exception('Price must be a number.');
            }
            $this->price = $new_price;
        }
        function setMilage($new_milage) {
            if (!is_numeric($new_milage)) {
                throw new Exception('Milage must be a number.');
            }
            $this->miles = $new_milage;
        }
        function setImg($new_img) {
            if (!is_string($new_img)) {
                throw new Exception('Image path must be a string.');
            }
            $this->img_path = $new_img;
        }

        function getType() {
            return $this->make_model;
        }
        function getPrice() {
            return $this->price;
        }
        function getMilage() {
            return $this->miles;
        }
        function getImg() {
            return $this->img_path;
        }

    }

    $first_car = new Car("car type", 1000, 23455, "../images/car.jpg");
    $other_car = new Car("other car type", 2000, 10343, "../images/car2.jpg");
    $still_another_car = new Car("still another car type", 3000, 9000, "../images/car3.jpg");
    $what_is_a_car = new Car(1,1,1,1);
    $what_is_a_car->setCar("this is a car");
    $what_is_a_car->setPrice(5000);
    $what_is_a_car->setMilage(12000);
    $what_is_a_car->setImg("../images/car4.jpg");

    $cars = array($first_car, $other_car, $still_another_car, $what_is_a_car);
    $cars_matching_search = array();

    foreach ($cars as $car) {
        if ($car->getPrice() < $_GET["price"] && $car->getMilage() < $_GET["milage"]) {
            array_push($cars_matching_search, $car);
        }
    }
?>

<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php 
            if (empty($cars_matching_search)) {
                echo "No results meeting search criteria.";
            } else {
                foreach ($cars_matching_search as $car) {
                    $car_make_model = $car->getType();
                    $car_price = $car->getPrice();
                    $car_milage = $car->getMilage();
                    $car_image = $car->getImg();
                    echo "<h2> $car_make_model </h2>
                        <ul>
                            <li> $$car_price </li>
                            <li> Miles: $car_milage </li>
                        </ul>
                        <img src=$car_image>";
                }
            }
        ?>
    </ul>
</body>
</html>
    
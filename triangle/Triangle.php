<?php
    class Triangle {
        public $side1;
        public $side2;
        public $side3;


        function __construct($side1, $side2, $side3) {
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
        }
    }

    $triangle = new Triangle($_GET["side1"], $_GET["side2"], $_GET["side3"]);
    function triangleType($side1, $side2, $side3) {
        if (($side1 + $side2) < $side3 || ($side2 + $side3) < $side1 || ($side1 + $side3) < $side2) {
            echo "This is not a triangle.";
        } else if ($side1 === $side2 && $side2 === $side3) {
            echo "This is an equalateral triangle.";
        } else if ($side1 !== $side2 && $side2 !== $side3 && $side3 !== $side1) {
            echo "This is a scalene triangle.";
        } else if ($side1 === $side2 && $side2 !== $side3) {
            echo "This is an isoceles triangle.";
        }
    }
?>

<html>
<head>
    <title>Angel Results</title>
</head>
<body>
    <h1><?php triangleType($triangle->side1, $triangle->side2, $triangle->side3) ?></h1>
</body>
</html>
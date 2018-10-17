<?php
    $month = $_GET["birth_month"];
    $tell_fortune = fortuneResult($month);
    function fortuneResult($input) {
        switch($input) {
            case 1:
                echo "A child will tell you that you're very old.";
                break;
            case 2:
                echo "You will find money on your way home, but it's glued down and some kids will laugh when you try to pick it up.";
                break;
            case 3:
                echo "You will go to work with a rip in the butt of your pants.";
                break;
            case 4:
                echo "You will get a peppercorn stuck in your throat and make a scene, when you drink water for relief you'll choke on the water and make a scene.";
                break;
            case 5:
                echo "You will break your dogs heart.";
                break;
            case 6:
                echo "Your favorite thing will break.";
                break;
            case 7:
                echo "You will wave to someone who is waving to someone behind you.";
                break;
            case 8:
                echo "You will go home after work and find there was a booger on your face and you won't know how long it's been there.";
                break;
            case 9:
                echo "You will get trapped at the DMV for several hours.";
                break;
            case 10:
                echo "For the whole month you will smell and taste nothing but pumpkin spice";
                break;
            case 11:
                echo "Your holiday protein of choice will be very, very dry.";
                break;
            case 12:
                echo "You won't get that thing you want.";
                break;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>The Stars Say</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $tell_fortune; ?></h1>
    </div>
</body>
</html>
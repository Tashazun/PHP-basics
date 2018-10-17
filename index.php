<?php
    $band = "Bat For Lashes";
    $music = "A haunting dream pop";
    $lead_singer = "Natasha Khan";
    $picture = "http://www.batforlashes.com/img/bride.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bands</title>
</head>
<body>
    <h1><?php echo $band; ?></h1>
    <p><?php echo $music; ?></p>
    <h2><?php echo $lead_singer; ?></h2>
    <img src="<?php echo $picture; ?>"/>
</body>
</html>
<?php
    $band = "Lizzo";
    $music = "Body positive, and self loving hip-hop";
    $lead_singer = "Melissa Jefferson";
    $picture = "https://cdn.pastemagazine.com/www/articles/lizzophone.main.png";
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
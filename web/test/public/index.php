<?php
include '../vendor/autoload.php';
$Hello = new App\Hello();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $Hello->getTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/style.css" />
</head>
<body>
    <div id="app">
        <h1><?php echo $Hello->getTitle() ?></h1>
    </div>
</body>
</html>
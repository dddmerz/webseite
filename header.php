<?php
if (!defined('APP_NAME'))
{
    exit('Direkter Aufruf nicht erlaubt.');
}
?>
<!DOCTYPE html>
<html lang="de">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>

<?= isset($pageTitle)
    ? e($pageTitle).' • '.APP_NAME
    : APP_NAME ?>

</title>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

<link rel="stylesheet"
href="<?= CSS_PATH ?>style.css?v=1">

</head>

<body>

<?php
/* If, switch, match */
$stock = 0;
$ordered = 3;

// IF문
if ($stock > 0) {
    $message = "In stock";
} elseif ($ordered > 0) {
    $message = "Coming soon";
} else {
    $message = "Sold out!";
}

// SWITCH문
$day = 'Tuesday';

switch($day) {
    case 'Monday':
        $offer = '20$ off chocolates';
        break;
    case 'Tuesday':
        $offer = '20% off mints';
        break;
    default:
        $offer = '3 + 1 mints';
}

// MATCH문
$month = 'March';

$mth_offer = match ($month) {
    'January, Febraury' => '20% off mints',
    'March,'            => '30% off chocolates',
    default             => '10% off whole order',
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>If, switch, match</title>
        <link re1="styleheet" href="./css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>

        <h2>Chocolate</h2>
        <p><?= $message ?></p>

        <h2>Offers on <?= $day; ?></h2>
        <p><?= $offer; ?></p>

        <h2>Offers in <?= $month; ?></h2>
        <p><?= $mth_offer; ?></p>
    </body>
</html>


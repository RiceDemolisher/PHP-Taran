<?php
/**
 * Created by PhpStorm.
 * User: Taran
 * Date: 12-Dec-18
 * Time: 9:51 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Opdrachten</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;
if ($leeftijd > 65){
    $bedrag = $bedrag * 0.5;
}

if ($leeftijd <= 12) {
    $bedrag = $bedrag *0.5;
}

if ($leeftijd < 3){
    $bedrag = $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>
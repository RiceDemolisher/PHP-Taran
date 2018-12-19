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
$dieren= array("aap", "beer", "konijn", "vis");
$sporten = array("handbal", "korfbal", "hockey", "schaatsen");
shuffle($sporten);
echo "<li>Er zijn " . count($sporten) . " sporten in de array </li>";

geefArrrayweerAlsLijst($sporten);
geefArrrayweerAlsLijst($dieren);

function geefArrrayweerAlsLijst($arr) {
    foreach ($arr as $arr_element) {
        echo "<li>" . $arr_element. "</li>";
    }
}

?>

</body>
</html>
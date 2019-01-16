<?php
session_start();

if(isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de website</h1>";
    echo "<p><a href='login.php'>login</a>";
} else {
    header('location: index.php');
    //terug naar inlogscherm
}
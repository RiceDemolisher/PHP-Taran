<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Admin") {
    echo "<h1>Welkom " . $_SESSION["user"] . " op het admingedeelte van de website";
    echo "<p><a href = 'index.php'>login</a></p>";
} else {
    header('location: index.php');

}
<?php
session_start();

$users = array(
    "1" => array("pwd" => "1", "rol" => "Admin"),
    "2" => array("pwd" => "2", "rol" => "User"),
);

if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST ["login"]] ["pwd"] == $_POST['pwd']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                              "pwd" => $users[$_POST["login"]] ['pwd'] ,
                              "rol" => $users[$_POST["login"]] ['rol']);
    $message = "Welkom ".$_SESSION["user"]["naam"]." met de rol "
               .$_SESSION["user"]["rol"];
    } else {
    $message = "inloggen";
}
//print_r($_SESSION);

?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="index.php" method="post">
    <div class="form-group">
        <label for="login"> Login</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<a href="website.php">Website</a><br>
<a href="index.php?loguit">Uitloggen</a><br>
<a href="admin.php?loguit">Admin</a>
</body>
</html>

<?php


$users = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
);


if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST ["login"]] == $_POST['pwd']) {
    $message = "Welkom!!";
} else {
    $message = "inloggen";
}
?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="formulier.php" method="post">
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
</body>
</html>

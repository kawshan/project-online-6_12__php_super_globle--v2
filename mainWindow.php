<?php

if (!(isset($_SESSION['username']) && time() - $_SESSION['lastactive']<10 )){
    echo ("time out");
    include ("login.html");
    die("error");
}
$_SESSION['lastactive']=time();
?>

<html>
<head></head>
<body>
<h1>welcome to harvest super</h1>
<h4>you are login as <?php
    echo ($_SESSION['username'])

    ?></h4>
<h4>(<a href="logout.php"> log out </a>)</h4>
<ul>
    <li><a href="fruit.php">fruits</a></li>
    <li> <a href="vegetable.php">vegetable </a></li>
</ul>
</body>
</html>
<?php
session_start();
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
    echo ($_SESSION['username']);
    ?></h4>
<h4>(<a href="logout.php"> logout </a>)</h4>
<h1>fruits</h1>
<table></table>
</body>
</html>

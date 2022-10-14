<?php
if (!(isset($_POST['txtUserName']) && isset($_POST['txtPassword']))){
include('login.html');
die("error");
}

$username=$_POST['txtUserName'];
$password=$_POST['txtPassword'];

if ($username=="root" && $password=="1234") {
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['lastactive']=time();
    include ("mainWindow.php");
}else{
    echo ("incorrect user name and password");
    include ("login.html");
}
?>
<?php
session_start();

$fID = "elbert";
$fPWD = "user123";

$aID = 'admin';
$aPWD = '123456';

$bID = 'teacher';
$bPWD = '321';


$uID = isset($_POST["uName"]) ? $_POST["uName"] : '';
$uPWD = isset($_POST["uPWD"]) ? $_POST["uPWD"] : '';

$date = strtotime("+5 days", time());

if ($uID == $fID && $uPWD == $fPWD) {

    $_SESSION['login'] = 'user';
    setcookie("uName", $uID, $date);
    header("Location: success.php");
    exit();

} elseif ($uID == $aID && $uPWD == $aPWD) {

    $_SESSION['login'] = 'admin';
    setcookie("uName", $uID, $date);
    header("Location: admin.php");
    exit();

} elseif ($uID == $bID && $uPWD == $bPWD) {

    $_SESSION['login'] = 'teacher';
    setcookie("uName", $uID, $date);
    header("Location: teacher.php");
    exit();

}else {

    header("Refresh:3;url=index.php");
    echo "Login Failed!";
    exit();
}
?> 
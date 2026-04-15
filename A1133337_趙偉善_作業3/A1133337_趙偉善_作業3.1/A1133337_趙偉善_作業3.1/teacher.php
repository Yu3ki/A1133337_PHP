<?php
session_start();

if (isset($_SESSION['login'])) {

    if ($_SESSION['login'] == 'teacher') {

        echo "<h1>Welcome! Teacher</h1><br>";
        echo "<a href='logout.php'>Logout</a>";

    } else {

        echo "<h1>Login Failed!</h1>";
        header("Refresh:3;url=index.php");
        exit();

    }

} else {

    echo "<h1>Login Failed!</h1>";
    header("Refresh:3;url=index.php");
    exit();

}
?>
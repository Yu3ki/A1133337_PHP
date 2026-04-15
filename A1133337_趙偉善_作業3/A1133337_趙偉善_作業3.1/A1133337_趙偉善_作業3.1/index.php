<?php
session_start();

if(isset($_COOKIE['uName'])) {
    echo $_COOKIE['uName'] . " Welcome Back!!<br>";
    echo "<a href='cookiedel.php'> Delete COOKIE </a><br><br>";
}
?>

<form action="logincheck.php" method="POST">
    ID: <input type="text" name="uName"><br/>
    Password: <input type="password" name="uPWD"><br/>
    <input type="submit" value="Login">
</form>

<?php
echo date("Y-m-d H:i:s");
?>
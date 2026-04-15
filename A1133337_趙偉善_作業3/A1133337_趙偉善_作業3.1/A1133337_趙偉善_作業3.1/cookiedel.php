<?php
setcookie('uName', '', time() - 100);
header("Location: index.php");
exit();
?>
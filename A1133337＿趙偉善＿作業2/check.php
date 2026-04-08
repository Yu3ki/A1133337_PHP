<html>
<head>
    <title>error</title>
</head>
<body>
    <?php
        $fID="a1133337";
        $fPWD="elbert456";

        if(isset($_POST["uID"])&& isset($_POST["uPWD"])){
            $uID=$_POST["uID"];
            $uPWD=$_POST["uPWD"];

            if($fID==$uID && $fPWD==$uPWD){
                header("Location: form.php");
            }else{
                echo "your password is wrong";
                header("Refresh:2; url=login.php");
            }
        }
    ?>
</body>
</html>
<html>
    <head>FORM</head>
<title></title>

<body>

<form action="result.php" method=“GET”>

please input your name:<input type="text" name="uName"><br>
please input your password:<input type="password"  name="uPwd"><br>
please input your email:<input type="email"  name="uEmail"><br>
please input your color:<input type="color"  name="uColor"><br>
please input your age:<input type="number"  name="uAge" min="10" max="70"><br>
please input your birthday:<input type="date"  name="uBirth"><br>
please select how you like the webpage:<input type="range"  name="uLike"><br>

please select your gender:
Male<input type="radio" name="uGender" value="male">
Female<input type="radio" name="uGender" value="female">
<BR>
Please select your interests:
Study<input type="checkbox" name="uInterest[]" value="study">
Sleep<input type="checkbox" name="uInterest[]" value="sleep">
Game<input type="checkbox" name="uInterest[]" value="game">
<br>
Please select your city:
<select name="uCity">
<option value="taipei">Taipei</option>
<option value="kaohsiung">Kaohsiung</option>
<option value="tainan">Tainan</option>
<option value="taichung">Taichung</option>
</select>
<br>
please input your comments:
<textarea cols="30" rows="10" name="uComment">
</textarea>

<br><input type="submit"><input type="reset">


</form>

</body>
</html>
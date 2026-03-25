<html>
<head>
    <title>夏令營報名表</title>
</head>

<body bgcolor="#FFF0F5">

<center>
    <h1><font color="HotPink">2026 夏令營報名表</font></h1>
    <p>請填寫以下資料完成報名</p>
</center>

<form action="" method="post">

<table border="1" align="center" width="700" cellpadding="10">

<tr>
    <td bgcolor="pink">姓名</td>
    <td><input type="text" name="name"></td>

    <td bgcolor="pink">性別</td>
    <td>
        男<input type="radio" name="gender" value="m">
        女<input type="radio" name="gender" value="f">
    </td>
</tr>

<tr>
    <td bgcolor="pink">生日</td>
    <td><input type="date" name="birthday"></td>

    <td bgcolor="pink">電話</td>
    <td><input type="text" name="phone"></td>
</tr>

<tr>
    <td bgcolor="pink">Email</td>
    <td colspan="3"><input type="email" name="email"></td>
</tr>

<tr>
    <td bgcolor="pink">營隊梯次</td>
    <td colspan="3">
        <input type="radio" name="camp" value="1">第一梯次
        <input type="radio" name="camp" value="2">第二梯次
    </td>
</tr>

<tr>
    <td bgcolor="pink">興趣</td>
    <td colspan="3">
        <input type="checkbox" name="interest[]" value="sport">運動
        <input type="checkbox" name="interest[]" value="music">音樂
        <input type="checkbox" name="interest[]" value="art">藝術
    </td>
</tr>

<tr>
    <td bgcolor="pink">留言</td>
    <td colspan="3">
        <textarea name="comment" rows="4" cols="40"></textarea>
    </td>
</tr>

<tr>
    <td colspan="4" align="center">
        <input type="submit" value="送出">
        <input type="reset" value="重設">
    </td>
</tr>

</table>

</form>

</body>
</html>
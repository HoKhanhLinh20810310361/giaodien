<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
</head> 
<body> 
<form action='login.php' class="dangnhap" method='POST'> 
    <h2>Đăng nhập</h2>
    Username: <input type='text' name='username' /> 
    Password: <input type='password' name='password' /> 
    <input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
    <a href='../dangky/register.php' title='Đăng ký'>Đăng ký</a> 
    <?php require 'xuly.php';?> 
</form> 
</body> 
</html>
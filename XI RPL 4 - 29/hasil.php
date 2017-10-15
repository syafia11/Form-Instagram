<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Instagram</title>
</head>

<body background="images/back.jpg">
<font size="5">
<style>
   div{
     width: 1330px;
     height: 612px;
     float: left;
     margin: 5px;
     text-align: center;
   }
   .garis { border: 10px ridge grey; }
</style>
<div class="garis">
<center>
<img width=400 height=120 src='images/iglogo.png'/>
<font size="7">
<center><td>WELCOME TO INSTAGRAM</td></center>
</font>
</center>
<br><font size="6">
<center><td>This is your Account</td>
</center>
</font>
</br>
<center><table>
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $_POST["email"]; ?></br></td>
</td>
<tr>
<td>Fullname</td>
<td>:</td>
<td><?php echo $_POST["fullname"]; ?></br></td>
</td>
<tr>
<td>Username</td>
<td>:</td>
<td><?php echo $_POST["username"]; ?></br></td>
</tr>
<tr>
<td><?php $password=$_POST['password'];
	$password = str_repeat("*", strlen($password));
	echo "<tr><td align=left>Password</td>
		  <td>:</td>
		  <td align=left> $password </td>
		  </tr>"; ?></br></td>
</tr>
</table>
</center>
<center>
<br><tr>
<td>Let's Get Started</td>
</tr>
</br></center>
</font>
</div>
</body>
</html>
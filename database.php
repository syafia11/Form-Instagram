<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="review">
<head>
<meta charset="UTF-8" />
<title>Hasil Database</title>
<link rel="stylesheet" href="form.php">
</head>

<body background="images/back.jpg">
<center><img width=400 height=120 src='images/iglogo.png' class="logo"></center>
<center>
<?php
$host= "localhost";
$user= "root";
$password= "";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$password=str_repeat("*",strlen("password"));


if($username)
{
$conn=mysqli_connect ($host,$user,$password);
mysqli_select_db ($conn,'dbinstagram');
$sql="insert into tbinsta values ('$email', '$fullname', '$username', '$password')";
$hasil=mysqli_query ($conn,$sql);
}

else{
	echo "Data Gagal Disimpan";
}

?>
</center>
<center>
<div id="container">
	<div class="Header">
		Instagram Account
	</div>

	<div class="hasil">
		<div class="email">
			E-mail : <?php echo" $email" ?><br>
		</div>

		<div class="fullname">
			Fullname : <?php echo "$fullname"; ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$username"; ?><br>
		</div>

		<div class="pw">
			Password : <?php echo "$password"; ?><br>
		</div>


	</div>
</div>
</center>
</body>
</html>
</body>
</html>

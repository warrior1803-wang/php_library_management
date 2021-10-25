<html>
<head>
	<title>图书管理系统登陆</title>
	<meta charset="UTF-8"  />
<script type="text/javascript">
</script>
<style type="text/css">
td
{ 
	height: 25px;
}
input
{ 
	height: 25px;
}
.wh
{ 
	width: 640px;
	height: 480px;
	margin: 50px 35% 0px 20%;
	text-align: center;
}
td.input
{ 
	width: 30px;
}
</style>
</head>
<body>
<?php
	$Err="";
	$a=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
		include("config.php");

		$outcome= mysqli_query("SELECT * FROM user",$online);

		while($sql = mysqli_fetch_array($outcome))
		{ 
			if (strcmp($sql['account'],$_POST['account']))
				$a=$a+1;
			if (strcmp($sql['password'],$_POST['password']))
				$a=$a+1;
			if ($a==0)
				{
					mysqli_close($online);

					session_start();
					$_SESSION['nickname'] = $sql['nickname'];
					$_SESSION['class'] = $sql['class'];
					$_SESSION['account'] = $sql['account'];
					echo '<script type="text/javascript"> alert("登陆成功"); window.location='.'\''.'main.php'.'\''.' </script>';
				};
			$a=0;
		}
		echo '<script type="text/javascript"> alert("用户名不存在或密码错误"); window.location='.'\''.'login.php'.'\''.' </script>';
	}
?>

<table width="640" height="480" align="center">
  <tr><td align="center">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
	<legend><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;图书管理登陆&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></legend>
	<table width="349" height="120" align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#DDDDDD">
	<tr>
		<td width="105" align="center">账号：</td>
		<td width="238" align="center">   <input type="text" name="account"/></td>
	</tr>
	<tr>
		<td align="center">密码：</td>
		<td align="center"> <input type="password" name="password"/></td>
	</tr>
	<tr>
		<td height="50" colspan="2" align="center" class="a"><input type="submit"  value="登陆">	&nbsp;&nbsp; <a href="register.php">账号注册</a></td>
		</tr>
	</table>
</fieldset>
</form>
</td></tr></table>

</body>
</html>
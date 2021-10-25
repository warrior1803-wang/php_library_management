<?php
	include("../config.php");


	$outcome= mysqli_query("SELECT * FROM user WHERE  account ='". $_GET['account'] . "'",$online);

	while($sql = mysqli_fetch_array($outcome))
	{
		if(($sql['account']==$_GET['account']));
			break;
	}
?>
<html>
<head>
	<title>图书信息修改</title>
	<meta charset="utf-8">
<style type="text/css">
.add_top
{ 
	margin-top: 30px;
}
td
{
	width: 90px;
	height: 30px;
	font-size: 18px;
}
body
{ 
	
}
input
{
	width: 200px;
}
</style>
</head>
<body>
<h1 align="center">图书信息修改</h1>
	<table align="center"  width="640" border="1" cellpadding="0" cellspacing="0" class="add_top">
	<form method="POST" action="readerinto_again.php?bo_ti=<?php echo $sql['account']; ?>">
		<tr>
			<td>用户名：</td>
			<td>&nbsp;&nbsp;<input type="text" name="account"  value="<?php echo $sql['account'];  ?>"/></td>
		</tr>
		<tr>
			<td>昵称：</td>
			<td>&nbsp;&nbsp;<input type="text" name="nickname" value="<?php echo $sql['nickname'];  ?>" /></td>
		</tr>	
		<tr>
			<td>密码：</td>
			<td>&nbsp;&nbsp;<input type="text" name="password" value="<?php echo $sql['password']; ?>"/></td>
		</tr>
				<tr>
			<td>权限：</td>
			<td>&nbsp;&nbsp;<input type="text" name="class" value="<?php echo $sql['class']; ?>"/>备注：“1”为管理员，“0为普通用户”</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" style="width:50px;" value="提交" />			  &nbsp;&nbsp;<input type="reset" style="width:50px;" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="manage.php" >返回主管理界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>
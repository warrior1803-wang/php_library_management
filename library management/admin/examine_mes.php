<!DOCTYPE html>
<html>
<head>
	<title>用户留言查看</title>
	<meta charset="UTF-8" />
<style type="text/css">
td
{ 
	height: 25px;
}
.ree
{ 
	font-size: 20px;
	margin: 10px 0px 0px 190px;
}
</style>
</head>
<body>
<h1 align="center">用户留言信息</h1>
<?php
	include("../config.php");

	$outcome = mysqli_query("SELECT * FROM board");

	echo "<table border='1' cellpadding=0 cellspacing=0 align = \"center\" width='1200'><tr height=30 bgcolor=#95FFFF><th>用户账号</th><th>留言内容</th><th>留言时间</th></tr>";

	$var = 0;

	while($sql = mysqli_fetch_array($outcome))
	{
		echo "<tr height=30><td align='center'>".$sql['user']."</td><td align='center'>&nbsp;&nbsp;&nbsp;".$sql['message']."</td><td align='center'>".$sql['time']."</td></tr>";
		if(isset($sql['user']))
			$var++;
	}

	if($var == 0)
		echo "<tr><td colspan='3' align='center'>没有留言信息</td></tr>";

	echo "</table>";
	echo "<div class='ree'><a href=\"manage.php\">返回主管理界面</a></div>";
	mysql_close($online);
?>
</body>
</html>
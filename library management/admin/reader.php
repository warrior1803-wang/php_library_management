
<html>
<head>
	<title>读者管理</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="CSS.css">
<style type="text/css">
td
{ 
	 height:30px;
}
</style>
</head>
<body>
</br>
<h1 align="center">欢迎你，管理员</h1>
<table align = "center" border = "1" width = "1200" cellpadding="0" cellspacing="0" style="text-align: center;">
	<tr height="30" bgcolor="#95FFFF">
		<td width = "320" ><a href="addbook.php">图书添加</a></td>
        <td width = "320" ><a href="reader.php">读者管理</a></td>
		<td width = "320" ><a href="examine_mes.php">查看用户留言</a></td>
		<td width = "320" ><a href="b_borrow.php">查看图书借阅信息</a></td>
	</tr>
</table>
<?php
	include "page.cless1.php";
	include("../config.php");
	$outcome= mysqli_query("SELECT * FROM user",$online);
	$total = mysqli_num_rows($outcome);
	$num = 10;
	$page = new Page($total,$num,"");
	$sql = "select * from user {$page->limit}";
	$outcome = mysqli_query($sql);
	echo '<table align = "center" border = "1" cellpadding="0" cellspacing="0" width = "1200"  style="text-align: center;">';
	echo "<caption><h2>读者管理</h2></caption>";
	echo "<tr bgcolor=#95FFFF>";

	echo "<td>"."用户名"."</td>";
	echo "<td>"."用户昵称"."</td>";
	echo "<td>"."密码"."</td>";
	echo "<td>"."操作"."</td>";
	echo "</tr>";
	while($sql = mysqil_fetch_array($outcome))
	{
		echo "<tr>";
		echo "<td>".$sql['account']."</td>";
		echo "<td>".$sql['nickname']."</td>";
		echo "<td>".$sql['password']."</td>";
		echo "<td>"."<a href="."\""."readerdelete_zj.php?account=".$sql['account']."\"".">&nbsp;&nbsp;删除&nbsp;|&nbsp;</a>";
		echo "<a href="."\""."reader_xg.php?account=".$sql['account']."\"".">修改&nbsp;&nbsp;</a></td>";
		echo "</tr>";
	}
	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	echo "<tr><td colspan = \"9\" align = \"center\"><a href=\"../main.php\">返回图书借阅界面</a></td></tr>";
	echo "</table>";
	mysqli_close($online);
?>
</body>
</html>

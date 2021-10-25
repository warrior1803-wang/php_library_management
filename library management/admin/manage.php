
<html>
<head>
	<title>图书后台管理</title>
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
	include "page.cless.php";
	include("../config.php");
	$outcome= mysqli_query("SELECT * FROM book",$online);
	$total = mysqli_num_rows($outcome);
	$num = 10;
	$page = new Page($total,$num,"");
	$sql = "select * from book {$page->limit}";
	$outcome = mysqli_query($sql);
	echo '<table align = "center" border = "1" cellpadding="0" cellspacing="0" width = "1200"  style="text-align: center;">';
	echo "<caption><h2>图书管理</h2></caption>";
	echo "<tr bgcolor=#95FFFF>";
	echo "<td>"."书本编号"."</td>";
	echo "<td>"."书名"."</td>";
	echo "<td>"."作者"."</td>";
	echo "<td>"."入库时间"."</td>";
	echo "<td>"."类型"."</td>";
	echo "<td>"."单价"."</td>";
	echo "<td>"."剩余数量"."</td>";
	echo "<td>"."已借阅数量"."</td>";
	echo "<td>"."操作"."</td>";
	echo "</tr>";
	while($sql = mysqli_fetch_array($outcome))
	{
		echo "<tr>";
		$id = $sql['num'];
		echo "<td>".$sql['num']."</td>";
		echo "<td>".$sql['book_title']."</td>";
		echo "<td>".$sql['author']."</td>";
		echo "<td>".$sql['add_time']."</td>";
		echo "<td>".$sql['type']."</td>";
		echo "<td>".$sql['money']."元</td>";
		echo "<td>".$sql['number']."</td>";
		echo "<td>".$sql['sy']."</td>";
		echo "<td>"."<a href="."\""."delete_zj.php?id=".$id."& book_title=".$sql['book_title']."\"".">&nbsp;&nbsp;删除&nbsp;|&nbsp;</a>";
		echo "<a href="."\""."revise.php?id=".$id."& book_title=".$sql['book_title']."\"".">修改&nbsp;&nbsp;</a></td>";
		echo "</tr>";
	}
	echo "<tr><td colspan = \"9\" align = \"center\">".$page->fpage(array(3,4,5,8,6,7,2,0,))."</td></tr>";
	echo "<tr><td colspan = \"9\" align = \"center\"><a href=\"../main.php\">返回图书借阅界面</a></td></tr>";
	echo "</table>";
	mysqli_close($online);
?>
</body>
</html>

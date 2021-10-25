<?php
	date_default_timezone_set("Asia/Shanghai");
	$time = date("Y-m-d") . " " . date("h:i:sa");
?>
<html>
<head>
	<meta charset="UTF-8" />
<style type="text/css">
.add_top
{
	margin-top: 20px;
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
<title>图书添加</title>
<body><h1 align="center">图书添加</h1>
	<table align="center" border="1" width="640" bordercolor="#D8D8D8"  cellpadding="0" cellspacing="0" class="add_top">
	<form method="POST" action="into.php">
		<tr height="30">
			<td>书名：</td>
			<td>&nbsp;&nbsp; <input type="text" name="book_title" /></td>
		</tr>
		<tr height="30">
			<td>作者：</td>
			<td>&nbsp;&nbsp; <input type="text" name="author"/></td>
		</tr>
		<tr height="30">
			<td>入库时间</td>
			<td>&nbsp;&nbsp; <input type="text" name="add_time" value="<?php echo $time;?>" /></td>
		</tr>
		<tr height="30">
			<td>类型：</td>
			<td>&nbsp;&nbsp; 
			<select name="type">
			<option value="程序语言">程序语言</option>
			<option value="HTML系列">HTML系列</option>
			<option value="浏览器脚本">浏览器脚本</option>
			<option value="服务器脚本">服务器脚本</option>
			<option value="ASP.NET">ASP.NET</option>
			<option value="XML(扩展标记语言)">XML（扩展标记语言）</option>
			<option value="Web Services 系列">Web Services 系列</option>
			<option value="网站构建">网站构建</option>
			<option value="计算机结构基础">计算机结构基础</option>
			<option value="其它">其它</option>
			</select>
			</td>
		</tr>

		<tr height="30">
			<td>单价：</td>
			<td>&nbsp;&nbsp; <input type="text" name="money"/></td>
		</tr>
		<tr height="30">
			<td>书本数量：</td>
			<td>&nbsp;&nbsp; <input type="text" name="number"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input style="width:50px;" type="submit" value="提交" /> &nbsp;&nbsp;  <input style="width:50px;" type="reset" value="重置" /></td>
		</tr>
		<tr>
			<td class='ree' colspan="2"><a href="manage.php" >返回主管理界面</a></td>
		</tr>
	</form>
	</table>
</body>
</html>
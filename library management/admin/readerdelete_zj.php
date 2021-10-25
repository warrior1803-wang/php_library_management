<html>
<head>
<meta charset="UTF-8"/>
<script type="text/javascript">
function delete_yn()
{
var r=confirm("确认删除有关该读者的所有记录?删除后无法恢复！");
if (r==true)
  	<?php echo "window.location='readerdelete.php?account="."&account=".$_GET["account"]."';"; ?>
else
  window.location='reader.php';
}
</script>
</head>
<body onLoad="delete_yn()">
</body>
</html>

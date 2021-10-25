<meta charset="UTF-8"/>
<?php
	include("../config.php");

$sql="INSERT INTO book (book_title,author,add_time,type,money,number,sy)
	VALUES ('$_POST[book_title]','$_POST[author]','$_POST[add_time]','$_POST[type]','$_POST[money]','$_POST[number]','$_POST[sy]')";

mysqli_query($sql,$online);

	echo '<script type="text/javascript"> alert("图书添加成功"); window.location='.'\''.'manage.php'.'\''.'</script>';
?>
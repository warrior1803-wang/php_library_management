<meta charset="UTF-8"/>
<?php
	include("../config.php");

	$mysql="DELETE FROM book WHERE num = '". $_GET['id'] ."'AND book_title ='". $_GET['book_title'] . "'";

	mysqli_query($mysql,$online);



	mysqli_select_db("book", $online);

	$mysql="DELETE FROM borrow WHERE book_id = ".$_GET['id'];

	mysqli_query($mysql,$online);



	mysqli_close($online);

echo '<script type="text/javascript"> alert("删除成功"); window.location='.'\''.'manage.php'.'\''.'</script>';

?>
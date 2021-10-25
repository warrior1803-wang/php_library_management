<?php
	header("Content-Type:text/html;charset=utf-8");
	
	include("config.php");

	$sel="SELECT * FROM book WHERE num=".$_GET['id'];

	$outcome= mysqli_query($sel,$online);
	while($sql = mysqli_fetch_array($outcome))
	{
		if ($sql['num'] == $_GET['id']) 
		{
			$sql['sy'] = $sql['sy']-1;
				$number = $sql['number']+1;
				$between_1="UPDATE book SET sy = '". $sql['sy'] ."' WHERE num = '". $_GET['id'] ."'AND book_title ='". $_GET['book_title'] . "'";
				mysqli_query($between_1,$online);
				echo mysqli_error();

				$between_2="UPDATE book SET number = '". $number ."' WHERE num = '". $_GET['id'] ."'AND book_title ='". $_GET['book_title'] . "'";
				mysqli_query($between_2,$online);
				echo mysqli_error();
				
				session_start();

				$mysql="DELETE FROM borrow WHERE book_id = '".$_GET['id']."'AND user = '".$_SESSION['account']."'";

				mysqli_query($mysql,$online);

			}
	}
	mysql_close($online);
	echo '<script type="text/javascript"> alert("图书归还成功"); window.location='.'\''.'main.php'.'\''.'</script>';
	exit();
?>

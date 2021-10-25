<?php
	header("Content-Type:text/html;charset=utf-8");

	date_default_timezone_set("Asia/shanghai");
	$time = date("Y-m-d") . " " . date("h:i:sa");

	include("config.php");

	$sel="SELECT * FROM book WHERE num=".$_GET['id'];

	$outcome= mysqli_query($sel,$online);
	while($sql = mysqli_fetch_array($outcome))
	{
		if ($sql['num'] == $_GET['id']) 
		{
			if ($sql['number'] >= 1) 
			{
				$sql['sy'] = $sql['sy']+1;
				$number = $sql['number']-1;

				$between_1="UPDATE book SET sy = '". $sql['sy'] ."' WHERE num = '". $_GET['id'] ."'AND book_title ='". $_GET['book_title'] . "'";
				mysqli_query($between_1,$online);
				echo mysqli_error();

				$between_2="UPDATE book SET number = '". $number ."' WHERE num = '". $_GET['id'] ."'AND book_title ='". $_GET['book_title'] . "'";
				mysqli_query($between_2,$online);
				echo mysqli_error();
				
				session_start();
				$ins="INSERT INTO borrow (user,book_id,time)
				VALUES ('$_SESSION[account]','$_GET[id]','$time')";
				mysqli_query($ins,$online);
			}
			else
			{ 
				echo '<script type="text/javascript"> alert("该图书已借完"); window.location='.'\''.'index.php'.'\''.' </script>';
				exit();
			}
		}
	}
	mysql_close($online);
	echo '<script type="text/javascript"> alert("图书借阅成功"); window.location='.'\''.'main.php'.'\''.'</script>';
	exit();
?>

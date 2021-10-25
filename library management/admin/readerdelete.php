<meta charset="UTF-8"/>
<?php
	include("../config.php");

	$mysql="DELETE FROM user WHERE account ='". $_GET['account'] . "'";

	mysqli_query($mysql,$online);

	mysqli_close($online);

echo '<script type="text/javascript"> alert("删除成功"); window.location='.'\''.'reader.php'.'\''.'</script>';

?>
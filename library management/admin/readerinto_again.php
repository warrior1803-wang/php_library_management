<meta charset="UTF-8"/>
<?php
	
	include("../config.php");

	$outcome="DELETE FROM user WHERE  account ='".$_GET['bo_ti']."'";
	mysqli_query($outcome,$online);

	$sql="INSERT INTO user (account,nickname,password,class)
	VALUES ('$_POST[account]','$_POST[nickname]','$_POST[password]','$_POST[class]')";

	mysqli_query($sql,$online);

	echo '<script type="text/javascript"> alert("读者信息修改成功"); window.location=\'reader.php'.'\''.'</script>';
?>
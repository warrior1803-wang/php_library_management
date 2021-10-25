<?php
	error_reporting(1);
	$online = mysqli_connect("localhost","root","root");

	mysqli_select_db("tushu",$online);

	mysqli_query("set names utf8");

?>
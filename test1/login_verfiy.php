<?php
	$adm="admin.html";
	$clnt="client.html";
	$uname = $_POST['tb_username'];
	$pswd = $_POST['tb_password'];
	if($uname=='admin' && $pswd=='root')
		echo $adm;
	if($uname=='client' && $pswd=='user')
		echo $clnt;
?>
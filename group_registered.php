<?php
	$name = $_POST['tb_grp_name'];
	$event = $_POST['cb_event'];
	$mem1 = $_POST['tb_mem1'];
	$mem2 = $_POST['tb_mem2'];
	$mem3 = $_POST['tb_mem3'];
	$mem4 = $_POST['tb_mem4'];

	echo "Registration Details";
	//echo "<br>ID: ".$id;
	echo "<br>GROUP NAME: ".$name;
	echo "<br>EVENT: ".$event;
	echo "<br>MEMBER 1: ".$mem1;
	echo "<br>MEMBER 2: ".$mem2;
	echo "<br>MEMBER 3: ".$mem3;
	echo "<br>MEMBER 4: ".$mem4;

	include("db_connection.php");

	$sql = "insert into db_groups (
		name,
		event,
		member1,
		member2,
		member3,
		member4
		) values(
		'$name',
		'$event',
		'$mem1',
		'$mem2',
		'$mem3',
		'$mem4')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "<b>"."<i>"."<br>Data Insertion Succession"."</i>"."</b>";
	}else{
		echo "<b>"."<i>"."<br>Data Insertion Failed"."</i>"."</b>";
		die(mysqli_error());
	}

?>

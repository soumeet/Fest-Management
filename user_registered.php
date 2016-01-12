<?php
	$name = $_POST['tb_name'];
	$mobile = $_POST['tb_mobile'];
	$email = $_POST['tb_email'];
	$college = $_POST['tb_college'];
	$gender = $_POST['rb_gender'];

	echo "Registration Details";
	//echo "<br>ID: ".$id;
	echo "<br>NAME: ".$name;
	echo "<br>MOBILE: ".$mobile;
	echo "<br>EMAIL ID: ".$email;
	echo "<br>COLLEGE: ".$college;
	echo "<br>GENDER: ".$gender;

	include("db_connection.php");

	$sql = "insert into db_users (
		name,
		mobile,
		email,
		college,
		gender
		)values(
		'$name',
		'$mobile',
		'$email',
		'$college',
		'$gender')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		//echo "<b>"."<i>"."<br>Data Insertion Succession"."</i>"."</b>";
		$id=mysqli_insert_id($con);
		echo "<br>ID: ".$id;
		header("Location: client.html#usr_reg");
		echo '<script type="text/javascript">alert("Registration Successful. ID: ' . $id . '");</script>';
		exit;
	}else{
		//echo "<b>"."<i>"."<br>Data Insertion Failed"."</i>"."</b>";
		echo '<script type="text/javascript">alert("Registration Failed");</script>';
		die(mysqli_error());
	}

?>

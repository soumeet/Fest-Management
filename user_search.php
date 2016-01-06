<?php
  $name = $_POST['tb_name'];
  include("db_connection.php");
  if($name==""){
    $sql = "SELECT * FROM db_users";
  }else{
    $sql = "SELECT * FROM db_users WHERE name = '$name'";
  }
	$result = mysqli_query($con, $sql);
  <table style="font-size: 16px" class="gridtable">
			<tr>
				<th>uid</th>
				<th>name</th>
				<th>password</th>
				<th>contact</th>
				<th>email</th>
				<th>address</th>
				<th>gender</th>
				<th>lastq</th>
			</tr>
  if ($result) {

	}else{

	}
?>
  include("db_connection.php");
	if($name==""){
		$sql = "SELECT * FROM db_users";
	}else{
		$sql = "SELECT * FROM db_users WHERE name = '$name'";
	}
	$result = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($result)){
		echo "<tr>
			<td>$row[id]</td>
			<td>$row[name]</td>
			<td>$row[gender]</td>
			<td>$row[mobile]</td>
			<td>$row[email]</td>
			<td>$row[college]</td>
		</tr>";
	}

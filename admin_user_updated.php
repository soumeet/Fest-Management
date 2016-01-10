<?php
  include ("db_connection.php");
  if(isset($_GET['bt_usr_search'])){
    $id = $_GET['tb_id'];
    $name = $_GET['tb_name'];
    $gender = $_GET['tb_gender'];
    $mobile = $_GET['tb_mobile'];
    $email = $_GET['tb_email'];
    $college = $_GET['tb_college'];

    echo "Updation Details";
    echo "<br>ID: ".$id;
    echo "<br>NAME: ".$name;
    echo "<br>GENDER: ".$gender;
    echo "<br>MOBILE: ".$mobile;
    echo "<br>EMAIL ID: ".$email;
    echo "<br>COLLEGE: ".$college;

    if($id==""){
      $sql = "SELECT * FROM db_users";
    }else{
      $sql = "UPDATE db_users SET
      name = '$name',
      gender = '$gender',
      mobile = '$mobile',
      email = '$email',
      college = '$college'
      where id='$id'";
    }
    $usr_updated_result = mysqli_query($con, $sql);
    if ($usr_updated_result){
			echo "<br>Data Updated successful";
		}else{
      echo "<br>Data Updated unsuccessful";
			die(mysqli_error());
		}
  }










?>

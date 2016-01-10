<?php
include("db_connection.php");
if(isset($_GET['bt_grp_update'])){
  $id = $_GET['tb_gid'];
  $name = $_GET['tb_name'];
  $event = $_GET['tb_event'];
  $mem1 = $_GET['tb_mem1'];
  $mem2 = $_GET['tb_mem2'];
  $mem3 = $_GET['tb_mem3'];
  $mem4 = $_GET['tb_mem4'];

  echo "Updation Details";
	echo "<br>ID: ".$id;
	echo "<br>GROUP NAME: ".$name;
	echo "<br>EVENT: ".$event;
	echo "<br>MEMBER 1: ".$mem1;
	echo "<br>MEMBER 2: ".$mem2;
	echo "<br>MEMBER 3: ".$mem3;
	echo "<br>MEMBER 4: ".$mem4;

  if($id==""){
    $sql = "SELECT * FROM db_users";
  }else{
    $sql = "UPDATE db_groups SET
    name = '$name',
    event = '$event',
    member1 = '$mem1',
    member2 = '$mem2',
    member3 = '$mem3',
    member4 = '$mem4'
    where group_id='$id'";
  }
  $grp_updated_result = mysqli_query($con, $sql);
  if ($grp_updated_result){
    echo "<br>Data Updated successful";
  }else{
    echo "<br>Data Updated unsuccessful";
    die(mysqli_error());
  }
}
?>

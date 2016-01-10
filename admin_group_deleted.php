<?php
include("db_connection.php");
if(isset($_GET['bt_usr_update'])){
  $id = $_GET['tb_gid'];
  if($id==""){
    echo "Please Provide a Group ID";
  }else{
    $sql = "DELETE FROM db_groups WHERE group_id='$id'";
  }
  $grp_updated_result = mysqli_query($con, $sql);
  if($grp_updated_result){
    echo "Data Deletion successful";
  }else{
    echo "Data Deletion unsuccessful";
    die(mysqli_error());
  }
}
?>

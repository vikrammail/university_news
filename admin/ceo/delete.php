<?php //include '../../com/isadminuser.php';
include('../../com/conn.php');
include('../../com/isceo.php');
$pag;
if(isset($_GET['page'])){
    $pag = $_GET['page'];
    $query1 = "DELETE FROM post WHERE index1='$pag'";
    $data1 = mysqli_query($con, $query1);
    header('location:/admin/ceo/deletepost');
  }
  else   {
      header('location:/admin/ceo/deletepost');
  }
  ?>
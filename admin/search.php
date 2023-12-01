<?php
        if(isset($_POST['bb'])){


          $nu = $_POST['bb'];
include '../com/conn.php';

      
  
$query = "SELECT * FROM post  where heading like '%$nu%'  ";

$data1=mysqli_query($con,$query);


$total1 = mysqli_num_rows($data1);

?>

<?php while($result = mysqli_fetch_assoc($data1)  ){ ?>
  <div class="">
      
<p><a class="" href="/commonhelp/user/feedpost/<?php echo $result['index1']; ?>"><h4><?php echo $result['heading'];  ?></h4></a></p>
<?php //echo $result['description'];  ?>
</div>
<?php } }

else{
  echo 'fill in the blanks';
}


?>
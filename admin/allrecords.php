<?php include '../com/isadminuser.php';
include '../com/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all record</title>
</head>
<body>
    <?php 
    include '../com/cdn.php';
    include '../com/header.php';
$email = $_SESSION['email'];
$authername = $_SESSION['name'];
$query1 = "SELECT * FROM content WHERE email='$email'";
    $data1 = mysqli_query($con, $query1);
    while ($result = mysqli_fetch_assoc($data1)) {
        ?>
   <!-- component -->
   <div class='place-items-center'>
<div class="max-w-md py-4 px-8  shadow-lg rounded-lg my-20">
  <!-- <div class="flex justify-center md:justify-end -mt-16">
    <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="photo/">
  </div> -->
  <div>
    <p class="mt-2 text-gray-500"><?php echo $result['title'] ?></p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="/admin/editpost?page=<?php echo $result['index1']; ?>" class="text-xl font-medium text-indigo-500">edit post</a>
  </div>
 
</div>
</div>
    <?php } ?>

    <?php include '../com/footer.php'?>
</body>
</html>
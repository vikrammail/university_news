<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purnea University News</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="university news">
    <meta name="description" content=" This is purnea university news site">


    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Home">
<meta property="og:description" content=" This is purnea university news site">
<meta property="og:image" content="url-to-your-image.jpg">
<meta property="og:url" content="https://www.yourwebsite.com/your-page">
<link rel="canonical" href="https://www.yourwebsite.com/your-page">
 <!-- twitter card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $result['title']; ?>">
<meta name="twitter:description" content="<?php echo $result['description']; ?>">
<meta name="twitter:image" content="url-to-your-image.jpg">



    <?php include 'com/conn.php';?>
    <?php include 'com/cdn.php';?>
</head>

<body class="bg-gray-100">
    <?php include 'com/header.php';?>


    <div class="container mx-auto p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- First Column -->
            <div class="p-4 shadow-md">
                <h2 class="text-lg bg-black-800 font-semibold mb-4">admition</h2>
                <?php
$query = "SELECT * FROM content WHERE catagory='admition' ";
$data1 = mysqli_query($con, $query);

while ($result = mysqli_fetch_assoc($data1)) {?>

                <i class="fas fa-star"></i><a
                    href="/admin/feed?page=<?php echo $result['index1']; ?>"><?php echo $result['title']; ?></a></br>
                <?php }?>
            </div>

            <!-- Second Column -->
            <div class="p-4 shadow-md">
                <h2 class="text-lg font-semibold mb-4">form apply</h2>
                <?php
$query = "SELECT * FROM content WHERE catagory='form-apply' ";
$data1 = mysqli_query($con, $query);

while ($result = mysqli_fetch_assoc($data1)) {?>

                <i class="fas fa-star"></i><a
                    href="/admin/feed?page=<?php echo $result['index1']; ?>"><?php echo $result['title']; ?></a></br>
                <?php }?>
            </div>

            <!-- Third Column -->
            <div class=" p-4 shadow-md">
                <h2 class="text-lg font-semibold mb-4">admit card</h2>
                <?php
$query = "SELECT * FROM content WHERE catagory='admit-card' ";
$data1 = mysqli_query($con, $query);

while ($result = mysqli_fetch_assoc($data1)) {?>

                <i class="fas fa-star"></i><a
                    href="/admin/feed?page=<?php echo $result['index1']; ?>"><?php echo $result['title']; ?></a></br>
                <?php }?>
            </div>

            <!-- Third Column -->
            <div class=" p-4 shadow-md">
                <h2 class="text-lg font-semibold mb-4">notification</h2>
                <?php
$query = "SELECT * FROM content WHERE catagory='notification' ";
$data1 = mysqli_query($con, $query);

while ($result = mysqli_fetch_assoc($data1)) {?>

                <i class="fas fa-star"></i><a
                    href="/admin/feed?page=<?php echo $result['index1']; ?>"><?php echo $result['title']; ?></a></br>
                <?php }?>
            </div>

        </div>
    </div>
    <?php include 'com/footer.php';?>
</body>

</html>
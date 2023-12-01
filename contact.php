<?php 
include 'com/conn.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    // $email = $_POST['email'];
    $message = $_POST['msg'];
    $index1 = '';
    $email = '';
        if($name || $message){
            $query="INSERT INTO contact  VALUES('$index1','$name','$message','$email')";
            $data=mysqli_query($con,$query);
            echo '<script> alert("sent successfully. Thank you for contact us");  </script>';
        }else{
            echo '<script> alert("failed contact us");  </script>';
        }

    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>contact</title>
        <meta name="description" content="you can contact easialy through this page">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php include('com/cdn.php'); ?>
        
    </head>
    <!-- component -->
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<style>
    :root { font-family: 'Inter', sans-serif; }
@supports (font-variation-settings: normal) {
  :root { font-family: 'Inter var', sans-serif; }
}
</style>
<body class="antialiased bg-slate-200">
<?php include('com/header.php'); ?>

    <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
        <h1 class="text-4xl font-medium">contact</h1>
        <p class="text-slate-500">Hi,fill up the form👋</p>

        
        <form action="#" method="POST" class="my-10">
            <div class="flex flex-col space-y-5">
                <label for="email">
                    <p class="font-medium text-slate-700 pb-2">Name</p>
                    <input id="email" name="name" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter your name">
                </label>
                <label for="password">
                    <p class="font-medium text-slate-700 pb-2">message</p>
                    <input id="password" name="msg" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter your message">
                </label>
                
                <button name="submit" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                      </svg>
                      <span>contact</span>
                </button>
                
            </div>
        </form>
    </div>
    
<?php include('com/footer.php'); ?>
    </body>
</html>


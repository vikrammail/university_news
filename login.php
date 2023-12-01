<?php
session_start();
if($_SESSION){
    // header("Location:admin/");
}
if(isset($_POST['submit'])){
    include('com/conn.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM admin_login WHERE email = '$email'";
    $data1 = mysqli_query($con, $query);
    $total1 = mysqli_num_rows($data1);

    while($result = mysqli_fetch_assoc($data1)){
        $email2 = $result['email'];
        $name = $result['name'];
        $adminuser = 'adminuser';
        if($email == $email2){
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['adminuser'] = $adminuser;
            // isceo($email);
            // header("Location: /admin");
            exit;
        }
        echo '<script> alert("login failed");  </script>';   
    }
}

function isceo($email){
    include('com/conn.php');
    $queryceo = "SELECT * FROM ceo_login WHERE email = '$email'";
    $dataceo = mysqli_query($con, $queryceo);
    while($resultceo = mysqli_fetch_assoc($dataceo)){
        $email2ceo = $resultceo['email'];
        $adminuserceo = 'ceo';
        if($email == $email2ceo){
            $_SESSION['email'] = $email;
            $_SESSION['isceo'] = $adminuserceo;
        }
    }
}

// function isadmin(){
//     $queryceo = "SELECT * FROM ceo_login WHERE email = '$email'";
//     $dataceo = mysqli_query($con, $queryceo);
//     while($resultceo = mysqli_fetch_assoc($dataceo)){
//         $email2ceo = $resultceo['email'];
//         $adminuserceo = 'ceo';
//         if($email == $email2ceo){
//             $_SESSION['email'] = $email;
//             $_SESSION['isceo'] = $adminuserceo;
//         }
//     }
// }
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
        <h1 class="text-4xl font-medium">Login</h1>
        <p class="text-slate-500">Hi, Welcome back 👋</p>

        <div class="my-5">
            <button class="w-full text-center py-3 my-3 border flex space-x-2 items-center justify-center border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-6 h-6" alt=""> <span>Login with Google</span>
            </button>
        </div>
        <form action="#" method="POST" class="my-10">
            <div class="flex flex-col space-y-5">
                <label for="email">
                    <p class="font-medium text-slate-700 pb-2">Email address</p>
                    <input id="email" name="email" type="email" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter email address">
                </label>
                <label for="password">
                    <p class="font-medium text-slate-700 pb-2">Password</p>
                    <input id="password" name="password" type="text" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter your password">
                </label>
                <!-- <div class="flex flex-row justify-between">
                    <div>
                        <label for="remember" class="">
                            <input type="checkbox" id="remember" class="w-4 h-4 border-slate-200 focus:bg-indigo-600">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <a href="#" class="font-medium text-indigo-600">Forgot Password?</a>
                    </div>
                </div> -->
                <button name="submit" class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                      </svg>
                      <span>Login</span>
                </button>
                <!-- <p class="text-center">Not registered yet? <a href="#" class="text-indigo-600 font-medium inline-flex space-x-1 items-center"><span>Register now </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg></span></a></p> -->
            </div>
        </form>
    </div>
    
<?php include('com/footer.php'); ?>
    </body>
</html>


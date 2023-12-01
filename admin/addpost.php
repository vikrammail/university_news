<?php include '../com/isadminuser.php';
include '../com/conn.php';
// if (extension_loaded('gd') && function_exists('gd_info')) {
//     // GD library is enabled
//     echo 'GD library is enabled';
// } else {
//     // GD library is not enabled
//     echo 'GD library is not enabled';
// }

if (isset($_POST['submit'])) {

    $index = '';
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $englishpost = $_POST['englishpost'];
    // hindipost handle
    if ($_POST['hindipost']) {$hindipost = $_POST['hindipost'];
    } else { $hindipost = 'error';
    }
    $keyword = $_POST['keyword'];
    // $image = 'error';
    $catagory = $_POST['catagory'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $useremail = $_SESSION['email'];
    $authername = $_SESSION['name'];
    if (!$heading || !$description || !$englishpost) {
        echo '<script> alert("fill in the blanks");  </script>';
    }

    $query1 = "SELECT * FROM post ";
    $data1 = mysqli_query($con, $query1);
    while ($result = mysqli_fetch_assoc($data1)) {
        $result1 = $result['heading'];
        $mc = explode(",", $result1);
    }

    // if (in_array($heading, $mc)) {
        echo '<script> alert("fill in the blanks");  </script>';

    // } else {
        // file handle
        if ($_FILES['file']['name']) {$image = upload();
        } else { $image = 'error';
        }
        $query = "INSERT INTO post  VALUES('$index','$heading','$description','$englishpost','$hindipost','$keyword','$image','$catagory','$date','$useremail','$authername')";
        $data = mysqli_query($con, $query);
        echo '<script> alert("sent successfully");  </script>';
    // }
    }
// } else {
//     echo '<script> alert("sent post failed");  </script>';

// }

function upload()
{
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp_loc = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    // $ext = array('jpeg',"jpg","png","gif","JPG","jfif");
    // $ex = pathinfo($file_name, PATHINFO_EXTENSION);
    // $ran = rand(1, 1000);
    // if($ex == 'jpeg' or $ex == 'jpg' or $ex == 'JPG'){
    //   $out = 'photo/'.date('H:i:s').'output4.jpg';
    //   $img = imagecreatefromjpeg($file_tmp_loc);
    // //   imagejpeg($img, $out,0.1);
    //   move_uploaded_file($file_tmp_loc, "photo/".$file_name);
    // }
    // elseif($ex == 'png'){
    //     $out = 'photo/'.date('H:i:s').'output4.png';
    //     $img = imagecreatefrompng($file_tmp_loc);
    // //   imagepng($img, $out,2);
    //   move_uploaded_file($file_tmp_loc, "photo/".$file_name);
    //   }
    list($width, $height) = getimagesize($file_tmp_loc);
    $newwidth = 400;
    $newheight = 200;
    $newimage = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($file_tmp_loc);
    imagecopyresized($newimage, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    $filename = time() . '.jpg';
    imagejpeg($newimage, 'photo/' . $filename);
    $image = $filename;
    return $image;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addpost</title>

    <style>
.custom-select select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    border: none;
    padding: 0.5rem 1rem;
    font-size: 16px;
    /* background-color: transparent; */
    cursor: pointer;
}

.custom-select {
    position: relative;
    width: 200px;
    /* background-color: #f1f1f1; */
    border-radius: 8px;
    overflow: hidden;
    color:'black;'
}

.custom-select::after {
    content: '\25BE';
    /* Unicode down arrow character */
    position: absolute;
    top: 50%;
    right: 1rem;
    transform: translateY(-50%);
    font-size: 14px;
}

.custom-select:hover {
    /* background-color: #e0e0e0; */
}
</style>
</head>
<body class="">
    <?php include '../com/Header.php';
    // require '../com/Header.php';
    ?>

    <div class="flex items-center justify-center p-2 ">
    <div class="mx-auto w-full max-w-[750px]">
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="custom-select">
                <select name='catagory' class='text-black' required>
                    <option value="news">news</option>
                    <option value="education">education</option>
                    <option value="movies">movies</option>
                    <option value="technology">technology</option>
                    <option value="university">university</option>
                </select>
            </div>
            <div class="-mx-3 flex flex-wrap">

                <div class="w-full px-3 sm:w-1/2">


                    <div class="mb-5">
                        <label for="fName" class="mb-3 block  font-medium ">
                            post heading name(unique)
                        </label>
                        <input type="text" required name="heading" id="fName" placeholder="description"
                            class="w-full rounded-md border border-[#e0e0e0] bg-grey-800  py-3 px-6 text-base font-medium  outline-none text-black focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="lName" class="mb-3 block  font-medium ">
                            post description
                        </label>
                        <input type="text" required name="description" id="lName" placeholder="description"
                            class="w-full rounded-md text-black border border-[#e0e0e0] bg-grey-800  py-3 px-6 text-base font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </div>


            <div class="-mx-3 flex flex-wrap">

                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="fName" class="mb-3 block text-base font-medium ">
                            post in english
                        </label>
                        <!-- <textarea rows="10" required  name="englishpost" id="fName" placeholder="englishpost"
                            class="w-full rounded-md border text-black border-[#e0e0e0] bg-grey-800 text-whitee py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </textarea> -->
                            <textarea name="englishpost" rows='10' id="fName" placeholder="englishpost "
                            class="w-full rounded-md border text-black border-[#e0e0e0] bg-grey-800  py-3 px-6 text-base font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="lName" class="mb-3 block text-base font-medium ">
                            post in hindi (not required)
                        </label>
                        <textarea name="hindipost" rows='10' id="lName" placeholder="hindi post "
                            class="w-full rounded-md border text-black border-[#e0e0e0] bg-grey-800  py-3 px-6 text-base font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    </div>
                </div>
            </div>

            <div class="-mx-3 flex flex-wrap">

                <div class="w-full px-3 sm:w-1/2">

                    <!-- keyword -->
                    <div class="mb-5">
                        <label for="fName" class="mb-3 block text-base font-medium ">
                            post keyword (use comma after every word)
                        </label>
                        <input type="text" required name="keyword" id="fName" placeholder="enter keyword"
                            class="w-full rounded-md border text-black border-[#e0e0e0]  py-3 px-6 text-base font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <label class="block mb-2 text-sm font-medium "
                        for="file_input">Upload post image (not required)</label>
                    <input
                        class="block w-full text-sm  rounded-lg cursor-pointer  dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" name='file' type="file">

                </div>
            </div>
            <!-- <div class="-mx-3 flex flex-wrap"> -->


            <!-- <div class="flex items-center space-x-6">
          <div class="flex items-center">
            <input
              type="radio"
              name="radio1"
              id="radioButton1"
              class="h-5 w-5"
            />
            <label
              for="radioButton1"
              class="pl-3 text-base font-medium text-[#07074D]"
            >
              Yes
            </label>
          </div>
          <div class="flex items-center">
            <input
              type="radio"
              name="radio1"
              id="radioButton2"
              class="h-5 w-5"
            />
            <label
              for="radioButton2"
              class="pl-3 text-base font-medium text-[#07074D]"
            >
              No
            </label>
          </div>
        </div> -->
            <!-- </div> -->

            <div>
                <button type='submit' name='submit'
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
    <?php include '../com/Footer.php'?>
</body>
</html>



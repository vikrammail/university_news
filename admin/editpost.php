<?php include '../com/isadminuser.php';
include('../com/conn.php');
$pag;
if(isset($_GET['page'])){
    $pag = $_GET['page'];
  
  }
  else   {
      header('location:/admin/allrecords');
  }
// update post
if(isset($_REQUEST['submit']))
  {
    include('../com/conn.php');
    $content = $_REQUEST['content'];
    $title = $_REQUEST['title'];
    $keyword = $_REQUEST['keyword'];
    $description = $_REQUEST['description'];
   $index1 = '';
   $date = date('Y-m-d H:i:s');
   $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $catagory = $_REQUEST['catagory'];
    $query = "INSERT INTO content  VALUES('$index1','$title','$keyword','$content','$date','$email','$name','$description','$catagory')";
        $data = mysqli_query($con, $query);
        echo '<script> alert("sent successfully");  </script>';
  }


//   fetch article
$useremail = $_SESSION['email'];
$sql = "SELECT * FROM content where index1='$pag' AND email='$useremail'";
$rsresult = mysqli_query($con,$sql);
?>

<?php 
  $v = 'v';
  while($result = mysqli_fetch_assoc($rsresult)  ){ 
    // if($result =0){header('location:/admin/allrecords'); }
    ?>

<!-- formstart -->
<body>
<style>
 .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 300px;
            }
.error
{
  color:  red;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<div class="container">
  <h3 align="center">edit post</h3>
  <br>
  <div class="box">
    <form method="post">
    <div class="form-group">
    <!-- select catagory<select name="catagory" class="form-select">
  <option value="admition">admition</option>
  <option value="form-apply">form apply</option>
  <option value="admit-card">admit card</option>
  <option value="notification">notification</option>
</select>
</br> -->
  insert title<input value="<?php echo $result['title'] ?>" name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
  insert keyword<input value="<?php echo $result['keyword'] ?>"  name="keyword" type="text" class="form-control">
  </div>
  <div class="form-group">
  insert description<input value="<?php echo $result['description'] ?>" name="description" type="text" class="form-control">
  </div>
  <div class="form-group">
  <input id="content" value="<?php echo $result['content'] ?>" name="content" class="form-control">
  </div>
  <div class="form-group">
  <input type="submit" name="submit" value="Save" class="btn btn-primary">
  </div>
  </form>
  <div class="error"><?php if(!empty($msg)){ echo $msg; } ?></div>
  </div>
</div> 
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ),{
          ckfinder:
          {
            uploadUrl: 'fileupload.php'
          }
        })
        .then(editor => {
          console.log(editor);
        })
        .catch( error => {
            console.error( error );
        });
</script>
<?php } ?>

<?php include '../com/footer.php'?>
</body>
</html>
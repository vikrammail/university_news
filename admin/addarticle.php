<?php include '../com/isadminuser.php';
?>
<html>  
<head>  
    <title>addpost</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>
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
  <?php 
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
  ?>
<body>
    
<div class="container">
  <h3 align="center">Hello <?php echo $_SESSION['name']; ?></h3>
  <br>
  <div class="box">
    <form method="post">
    <div class="form-group">
    select catagory<select name="catagory" class="form-select">
  <option value="admition">admition</option>
  <option value="form-apply">form apply</option>
  <option value="admit-card">admit card</option>
  <option value="notification">notification</option>
</select>
</br>
  insert title<input  name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
  insert keyword<input  name="keyword" type="text" class="form-control">
  </div>
  <div class="form-group">
  insert description<input  name="description" type="text" class="form-control">
  </div>
  <div class="form-group">
  <textarea id="content" name="content" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <input type="submit" name="submit" value="Save" class="btn btn-primary">
  </div>
  </form>
  <div class="error"><?php if(!empty($msg)){ echo $msg; } ?></div>
  </div>
</div> 
 </body>  
</html>  
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<script src="https://cdn.tailwindcss.com"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  /* display: flex;
  justify-content: center; */
  /* align-items: center; */
  /* background: #f2f2f2; */
}
.title{
    /* width: 100px; */
  height: 60px;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  text-align: center;
  position: relative;
  background: #fff;
  /* box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25); */
}
nav{
  width: 600px;
  height: 60px;
  border-radius: 5px;
  display: flex;
  text-align: center;
  position: relative;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
}
nav label{
  width: 100%;
  height: 100%;
  line-height: 60px;
  font-size: 18px;
  font-weight: 400;
  border-radius: 5px;
  margin: 0 5px;
  color: #8e44ad;
  position: relative;
  z-index: 1;
  cursor: pointer;
  transition: all 0.3s ease;
}
nav label:hover{
background: rgba(142, 68, 173, 0.3);
}
nav label i{
  margin-right: 4px;
}
nav .slider{
  position: absolute;
  height: 100%;
  width: 20%;
  background: #8e44ad;
  left: 0;
  top: 0;
  border-radius: 5px;
  transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: 1;
}
#home:checked ~ nav label.home,
#blog:checked ~ nav label.blog,
#code:checked ~ nav label.code,
#help:checked ~ nav label.help,
#about:checked ~ nav label.about{
  color: #fff;
}
#blog:checked ~ nav .slider{
left: 20%;
}
#code:checked ~ nav .slider{
left: 40%;
}
#help:checked ~ nav .slider{
left: 60%;
}
#about:checked ~ nav .slider{
left: 80%;
}
input[type=radio]{
  display: none;
}


    </style>
    <div class=" backdrop-blur py-2 shadow-md sticky top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 sm:px-8 lg:px-16 xl:px ">
vikram
</div>
</div>



  <div class="container">
    <!-- <div class="title">vikram</div> -->
    <input type="radio" name="s" id="home" checked>
    <input type="radio" name="s" id="blog">
    <input type="radio" name="s" id="code">
    <input type="radio" name="s" id="help">
    <input type="radio" name="s" id="about">
    <nav>
      <div class="slider"></div>
      <label onclick="goToGeeksforGeeks()" class="home" for="home">
      <i class="fas fa-home"></i>Home
      </label>
      <label onclick="goToGeeksforGeeks()1" class="blog" for="blog">
      <i class="fas fa-blog"></i>Blog
      </label>
      <label onclick="goToGeeksforGeeks2()" class="code" for="code">
        <i class="fas fa-code"></i>Code
      </label>
      <label onclick="goToGeeksforGeeks3()" class="help" for="help">
        <i class="fas fa-envelope"></i>Help
      </label>
      <label onclick="goToGeeksforGeeks4()" class="about" for="about">
        <i class="fas fa-user"></i>About
      </label>
    </nav>
  </div>
  <script> 
        function goToGeeksforGeeks() { 
            window.location.replace( 
                "#"); 
        } function goToGeeksforGeeks1() { 
            window.location.replace( 
                "#"); 
        } function goToGeeksforGeeks2() { 
            window.location.replace( 
                "#"); 
        } function goToGeeksforGeeks3() { 
            window.location.replace( 
                "#"); 
        } function goToGeeksforGeeks() { 
            window.location.replace( 
                "#"); 
        } 
    </script> 
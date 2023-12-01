<?php
include 'conn.php';
mysqli_query($con,"update visit set reload_count=reload_count+1");
if(!isset($_COOKIE['visit'])){
	// setCookie('visit','yes',time()+(60*60*24*30));
    $cookie_name = "visit";
$cookie_value = "yes";
setcookie($cookie_name, $cookie_value, time() + (60*60*24*30), "/");
	mysqli_query($con,"update visit set total_count=total_count+1");
}
?>
	<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6 fixed w-full z-10 top-0">
		<div class="flex items-center flex-shrink-0 text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="/">
				<span class="text-2xl pl-2"><i class="em em-grinning"></i> purnea university</span>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<li class="mr-3">
					<a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline    hover:text-white transition duration-300 py-2 px-4" href="#">link</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/about">about</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/contact">contact us</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/logout">logout</a>
				</li>
				
				<?php if($_SESSION){ ?>
					<li class="mr-3">
					<img src="<?php echo $_SESSION['profile_picture'] ?>" alt="Awesome Image" class=" h-10 object-cover rounded-sm shadow-sm">
				</li>
			<?php	}else{ ?>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/signup">signup</a>
				</li>
			<?php } ?>
				
    
			</ul>
		</div>
	</nav>

	<!--Container-->
	<div class="container shadow-lg mx-auto  mt-24 md:mt-18">

	</div>

	<script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>
</br>
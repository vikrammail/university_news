
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>



  <!-- Button to Open Modal -->
  <button id="openModalBtn" class=" rounded "><i class="fa-solid fa-magnifying-glass"></i></button>

  <!-- Modal Background -->
  <div id="modalBackground" class="hidden fixed inset-0 flex items-center justify-center bg-gray-700 text-white z-10">

    <!-- Modal Content -->
    <div class="modal-content bg-gray-800 p-6 rounded shadow-md w-94">
      <h2 class=" font-semibold mb-4">search post</h2>
      <form>   
        <label for="default-search" class="mb-2 text-sm font-medium  sr-only ">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5  " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="search" class="block p-4 pl-10 w-full text-sm bg-gray-800   rounded-lg border   " placeholder="Search.." required>
            <!-- <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> -->
        </div>
    </form>
<p>This is the mod.</p>
<div class='text-white' id="form"></div>

      <button id="closeModalBtn" class="mt-4 px-4 py-2  rounded ">Close</button>
    </div>

  </div>

  <script>
    const openModalBtn = document.getElementById('openModalBtn');
    const modalBackground = document.getElementById('modalBackground');
    const closeModalBtn = document.getElementById('closeModalBtn');

    openModalBtn.addEventListener('click', () => {
      modalBackground.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', () => {
      modalBackground.classList.add('hidden');
    });
  </script>
  <script>
    $(document).ready(function(){

          
$('#search').on("keyup",function(){
    var link = $('#search').val();
$.ajax({
url: "search.php",
type: "post",
data: {bb:link},
success: function(data){
    $('#form').html(data);
}

}); 

});
});
  </script>

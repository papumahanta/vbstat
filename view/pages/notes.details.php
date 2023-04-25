<?php
$paper = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$title = ucwords(str_replace('-', ' ', $paper)) . ' ' . 'Notes';
$description = '' . $paper . ' notes page ';
$keywords = ' statistics, paper, ' . $paper . '';
include_once './view/inc/header.php';
?>







<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">

<h1 class="mb-5 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white"><?php echo str_replace(array('-', '_'), ' ', ucfirst($paper)); ?></h1>




<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
 
}


</style>




<!-- Modal toggle -->
<button id="myBtn" class="px-4 py-2 text-sm font-medium text-gray-900  rounded bg-gray-100 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700  dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white" type="button">
  Syllabus
</button>


        






<?php
echo '
<!-- Main modal -->
<div id="myModal" class="modal"><br>
    <div class="modal-content  bg-gray-100  text-sm font-medium    rounded-lg  dark:bg-gray-700 dark:text-white  px-4 py-2 ">
        <!-- Modal header -->
        <div class="modal-header">
            
        </div>
        <!-- Modal body -->
        <div class="modal-body">
<pre>';
echo file_get_contents( "./note/$paper/syllabus.txt" ); // get the contents, and echo it out.
echo '</pre>
</div>
        <!-- Modal footer -->
        <div class="modal-footer">
           
        </div>
    </div>
</div>
';
?>














<br>
<br>

    <?php
    echo '<ul class=" bg-gray-100  text-sm font-medium    rounded-lg  dark:bg-gray-700 dark:text-white">';

    echo '<li class="w-full px-4 py-2 rounded-b-lg"><div class="flex items-center space-x-4"><div class="flex-1 min-w-0"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Title</p><p class="text-sm text-gray-500 truncate dark:text-gray-400"></p></div><div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Size</p></div></div></li>';



    foreach (array_diff(scandir("./note/$paper"), array('.', '..', 'syllabus.txt')) as $file) {
        $fz = filesize("./note/$paper/$file");
        $fz = round($fz / 1024 / 1024, 2); // kilobytes with two digits
        echo '
<a target="_blank" href="' . $url . '/note/' . $paper . '/' . $file . '">
<li class=" py-2 px-4 border-gray-200 border-a  dark:border-gray-600">
<div class="flex items-center space-x-4">
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
' . $file . '
</p>
<p class="text-sm text-gray-500 truncate dark:text-gray-400">
</p>
</div>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
' . $fz . ' mb
</p>
</div>
</div>
</li>
</a>
';
    }

    echo "</ul>\n";
    ?>
</div>

<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, toggle the modal
  btn.onclick = function() {
    if (modal.style.display === "block") {
      modal.style.display = "none";
      btn.textContent = "Syllabus";
    } else {
      modal.style.display = "block";
      btn.textContent = "Hide";
    }
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
    btn.textContent = "Show modal";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
      btn.textContent = "Show modal";
    }
  }
</script>



<?php include_once './view/inc/footer.php'; ?>
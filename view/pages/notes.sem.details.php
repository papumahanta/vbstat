<?php
$paper = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$title = ucwords(str_replace('-', ' ', $paper)) . ' ' . 'Notes';
$description = 'paper: ' . $paper . ' list ';
$keywords = 'vbstat, statistics, paper, ' . $paper . '';
include_once './view/inc/header.php';
?>







<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">

<h1 class="mb-5 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white"><?php if ( is_numeric($paper) ) { echo 'Semester : ';} echo str_replace(array('-', '_'), ' ', ucfirst($paper)); ?></h1>










    <?php


if ($p3 == NULL) {




    echo '<ul class=" bg-gray-100  text-sm font-medium    rounded-lg  dark:bg-gray-700 dark:text-white">';

    echo '<li class="w-full px-4 py-2 rounded-b-lg"><div class="flex items-center space-x-4"><div class="flex-1 min-w-0"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Semester</p><p class="text-sm text-gray-500 truncate dark:text-gray-400"></p></div><div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"></div></div></li>';



    foreach (array_diff(scandir("./note/$paper"), array('.', '..', 'syllabus.txt')) as $file) {
        $fz = filesize("./note/$paper/$file");
        $fz = round($fz / 1024 / 1024, 2); // kilobytes with two digits
        echo '
<a  href="' . $url . '/notes/'.$p2.'/' . $file . '">
<li class=" py-2 px-4 border-gray-200 border-a  dark:border-gray-600">
<div class="flex items-center space-x-4">
<div class="flex-1 min-w-0">
<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
' . $file . '
</p>

</div>

</div>
</li>
</a>
';
    }

    echo "</ul>\n";





} else {
  







    echo '<ul class=" bg-gray-100  text-sm font-medium    rounded-lg  dark:bg-gray-700 dark:text-white">';

    echo '<li class="w-full px-4 py-2 rounded-b-lg"><div class="flex items-center space-x-4"><div class="flex-1 min-w-0"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Title</p><p class="text-sm text-gray-500 truncate dark:text-gray-400"></p></div><div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Size</p></div></div></li>';



    foreach (array_diff(scandir("./note/$p2/$p3"), array('.', '..', 'syllabus.txt')) as $file) {
        $fz = filesize("./note/$p2/$p3/$file");
        $fz = round($fz / 1024 / 1024, 2); // kilobytes with two digits
        echo '
<a target="_blank" href="' . $url . '/note/'.$p2.'/'.$p3.'/' . $file . '">
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












}






    ?>








</div>
<?php include_once './view/inc/footer.php'; ?>
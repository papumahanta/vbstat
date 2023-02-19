<?php
$paper = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$title = ucwords(str_replace('-', ' ', $paper)) . ' ' . 'Notes';
$description = 'paper: ' . $paper . ' list ';
$keywords = 'vbstat, statistics, paper, ' . $paper . '';
include_once './assets/view/inc/header.php';
?>







<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">





    <?php
$check=file_exists("./assets/pdf/$paper/syllabus.txt");

if ($check== "1") {

echo '<div class="bg-gray-100  max-w-screen-xl px-4 py-3 mx-auto md:px-6 border-gray-200 rounded-lg  dark:bg-gray-700 dark:text-white"><pre>';
echo file_get_contents( "./assets/pdf/$paper/syllabus.txt" ); // get the contents, and echo it out.
echo "</pre></div>";

}

    ?>   






<br>

    <?php
    echo '<ul class=" bg-gray-100  text-sm font-medium    rounded-lg  dark:bg-gray-700 dark:text-white">';

    echo '<li class="w-full px-4 py-2 rounded-b-lg"><div class="flex items-center space-x-4"><div class="flex-1 min-w-0"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Title</p><p class="text-sm text-gray-500 truncate dark:text-gray-400"></p></div><div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"><p class="text-sm font-medium text-gray-900 truncate dark:text-white">Size</p></div></div></li>';



    foreach (array_diff(scandir("./assets/pdf/$paper"), array('.', '..', 'syllabus.txt')) as $file) {
        $fz = filesize("./assets/pdf/$paper/$file");
        $fz = round($fz / 1024 / 1024, 2); // kilobytes with two digits
        echo '
<a target="_blank" href="' . $url . '/assets/pdf/' . $paper . '/' . $file . '">
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
<?php include_once './assets/view/inc/footer.php'; ?>
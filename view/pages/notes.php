<?php
$title = 'Notes list by paper names';
$description = 'class notes lectures syllabus - this page is an unofficial and maintained by statistics students of department of statistics visva bharati university';
$keywords = 'vbstat, statistics, department, lecture, pdf, note, visvabharati';
include_once './assets/view/inc/header.php';
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6 ">
    <?php
    echo '<ul class="bg-gray-100  text-sm font-medium     rounded-lg  dark:bg-gray-700 dark:text-white">';
    foreach (array_diff(scandir("./assets/pdf"), array('.', '..','ge-math','previous-year-questions')) as $file) {
        echo '<a href="' . $url . '/notes/' . $file . '"><li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">' . $file . '</li></a>';
    }












    echo '<a href="https://vbstat.ml/notes/ge-math"><li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">ge math</li></a>';



    echo '<a href="https://vbstat.ml/notes/previous-year-questions"><li  class="w-full px-4 py-2 rounded-b-lg">previous year</li></a>';






    echo "</ul>\n";
    ?>
</div>
<?php include_once './assets/view/inc/footer.php'; ?>
<?php
$title = 'Notes list by paper';
$description = 'List of Notes papers mainly includes Statistics Honours papers and Generic elective as Mathematics of 4 semester projects assignment and  previous year questions semester wise';
$keywords = 'vbstat notes,list notes,note';
include_once './view/inc/header.php';
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6 ">

<h2 class="text-4xl font-extrabold dark:text-white ">Notes</h2>
<p class="text-lg text-gray-500 xl:mr-64 lg:mb-0 dark:text-gray-400 py-5">List of Notes papers wise listed for GE math there are 2 semester .</p>


    <?php
    echo '<ul class="bg-gray-100  text-sm font-medium     rounded-lg  dark:bg-gray-700 dark:text-white">';
    foreach (array_diff(scandir("./note"), array('.', '..','ge-math','previous-year-questions')) as $file) {
        echo '<a href="' . $url . '/notes/' . $file . '"><li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">' . $file . '</li></a>';
    }












    echo '<a href="https://vbstat.ml/notes/ge-math"><li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">ge math</li></a>';






echo '<a href="https://vbstat.ml/projects"><li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">projects</li></a>';





    echo '<a href="https://vbstat.ml/notes/previous-year-questions"><li  class="w-full px-4 py-2 rounded-b-lg">previous year</li></a>';






    echo "</ul>\n";
    ?>
</div>
<?php include_once './view/inc/footer.php'; ?>
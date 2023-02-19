<?php
$title = 'Gallery';
$description = 'class notes lectures syllabus  -  this page is an unofficial and maintained by statistics students of department of statistics  visva bharati university';
$keywords = 'vbstat, statistics, department, lecture, pdf, note, visvabharati';

include_once './assets/view/inc/header.php';
?>

<div class="pt-6 max-w-screen-xl px-4 py-3 mx-auto md:px-6">










<iframe width="100%" height="400px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; ;border-radius:8px;" src="https://panoraven.com/en/embed/WG0zY95fGe"></iframe>



<h1 class="flex justify-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Dep<span class="hidden lg:mt-0 lg:col-span-5 lg:flex">artmen</span>t of Statistics</h1>




<!-- 

<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">2021</h2>


    <?php
    echo '<div class="grid-container">';
    foreach (array_diff(scandir("./assets/img/2021"), array('.', '..')) as $img) {
        echo '
 <div>
<a href="' . $url . '/gallery/' . $img . '"><img   class="h-auto max-w-full rounded-lg" src="' . $url . '/assets/img/2021/' . $img . '"></a>
</div>
';
    }
    echo " </div>\n";
    ?>



</div>

-->

<hr>





<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">2022</h2>

    <?php
    echo '<div class="grid-container">';
    foreach (array_diff(scandir("./assets/img/2022"), array('.', '..')) as $img) {



 $replaced = str_replace('-', ' ', $img);
 $replaced = str_replace('.jpg', '', $replaced);
 $replaced = ucwords("$replaced");

        echo '
 <div>
<a href="' . $url . '/gallery/' . $img . '"><figure class="max-w-lg"><img   class="h-auto max-w-full rounded-lg" src="' . $url . '/assets/img/2022/' . $img . '">  <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">' .  $replaced . '</figcaption></figure></a>
</div>
';
    }
    echo " </div>\n";
    ?>
</div>















<?php include_once './assets/view/inc/footer.php'; ?>
<?php
$photo= basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$photo=str_replace('.jpg', ' ', $photo);
$title = ucwords(str_replace('-', ' ', $photo)). '  '.' Gallery';
$description='class notes lectures syllabus - this page is an unofficial and maintained by statistics students of department of statistics visva bharati university';
$keywords='vbstat, statistics, department, lecture, pdf, note, visvabharati';

include_once './assets/view/inc/header.php';
?>
<?php
$curl = (isset($_SERVER['HTTPS']) ? "http" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$iname= basename($curl);
$n=basename($iname,".jpg");

 $n = str_replace('-', ' ', $n);

 $n = ucwords("$n");




?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
<section class=" ">
<div class="gap-8 items-center py-8 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
<img class="w-full px-2" src="<?php echo $url; ?>/assets/img/2022/<?php echo $iname; ?>" alt="<?php echo $n; ?>">
<div class="px-4 mt-4 md:mt-0">
<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"><?php echo $n; ?></h2>

















<p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400" style="word-wrap: break-word;">





<?php


$check=file_exists("./assets/data/gallery/$iname.txt");
if ($check== "1") {
  include "./assets/data/gallery/$iname.txt";
}
 else {
  echo '<a target="_blank" href="/assets/data/gallery/edit.php?photo='.$iname.'">Edit</a>';
}

?>




</p>
</div>
</div>
</section>
</div>
<?php include_once './assets/view/inc/footer.php'; ?>
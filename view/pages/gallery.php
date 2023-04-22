<?php
$title = 'Gallery';
$description = 'Photos and selfie gallery of classroom department achievement and more ';
$keywords = 'vbstat gallery,portfullio,images,photos';

include_once './view/inc/header.php';
?>

<div class="pt-6 max-w-screen-xl px-4 py-3 mx-auto md:px-6">







<h2 class="text-4xl font-extrabold dark:text-white ">Gallery</h2>
<p class="text-lg text-gray-500 xl:mr-64 lg:mb-0 dark:text-gray-400 py-5">Photo gallery Images yearwise sorted. For VR view scrol down to bottom</p>






<?php
$t = $_GET['view'];

if ($t == "360") {
  echo '
<iframe width="100%" height="300px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; ;border-radius:8px;" src="https://panoraven.com/en/embed/WG0zY95fGe"></iframe>
';

echo '<h1 class="flex justify-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Dep<span class="hidden lg:mt-0 lg:col-span-5 lg:flex">artmen</span>t of Statistics</h1>
';

}
?>



















































<?php

foreach (array_diff(scandir("./img"), array('.', '..','p')) as $imgFolder) {
   

echo '<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">'.$imgFolder.'</h2>';
    echo '<div class="grid-container">';

foreach (array_diff(scandir("./img/$imgFolder"), array('.', '..')) as $img) {
   
 $replaced = str_replace('-', ' ', $img);
 $replaced = str_replace('.jpg', '', $replaced);
 $replaced = ucwords("$replaced");

$modified_string = str_replace(".jpg", "", $img);


 echo '
 <div>
<a href="' . $url . '/gallery/' . $modified_string . '">

<figure class="max-w-lg"><img   class="h-auto max-w-full rounded-lg" src="' . $url . '/img/'.$imgFolder.'/' . $img . '"  alt="' .  $replaced . '">  <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">' .  $replaced . '</figcaption></figure>

</a>
</div>
';


}

    echo " </div>\n";




}
?>
























<br>
<br>

<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">Folder 1</h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=10Xk5j7WTDeNnwKDI4ZjUU8oWDJu-Z0un#grid" style="width:100%; height:100vh; border:0;"></iframe><br><br>
<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">Folder 2</h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=1IQN2OmpJKNOs83kFSnhskTlJ6DkyqMsY#grid" style="width:100%; height:100vh; border:0;"></iframe>


<a href="?view=360" title="view dept in 360 " class="text-gray-900 dark:text-white hover:underline">Click to view Department in panoroma.</a>





</div>



<?php include_once './view/inc/footer.php'; ?>
<?php 
$title = 'Profile';
$description='profiles';
$keywords='profile,vbstat';
include_once './assets/view/inc/header.php';
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
       


   <?php
            $curl = (isset($_SERVER['HTTPS']) ? "http" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $parts = parse_url($curl);
            $path_parts = explode('/', $parts[path]);
            $p1 = $path_parts[1];
            $p2 = $path_parts[2];
            $p3 = $path_parts[3];
            $p4 = $path_parts[4];

echo  $p1 ;echo  $p2 ;
            ?>
         






</div>
<?php include_once './assets/view/inc/footer.php'; ?>
<?php 
$title = '404!';
$description='404';
$keywords='404';

include_once './assets/view/inc/header.php';

?>

<style>
.max-w-screen-xl.px-4.py-3.mx-auto.md\:px-6 {
    display: none;
}
</style>




<section class=" dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-400 dark:text-white">404!</h1>

  <img  class="h-auto max-w-xs mx-auto"  src="/assets/view/img/404.png"  alt="404">


            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's missing.</p>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, can't find that page. You may find  on the home page. </p>
            <a style="background: red;"  href="/" class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>
        </div>   
    </div>
</section>







<?php include 'inc/footer.php';?>
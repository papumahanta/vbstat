<?php 
$title = '404!';
$description='404';
$keywords='404';

include_once './view/inc/header.php';

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
            

<form class="w-full max-w-md mx-auto" method="get" action="/search">

 <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search.  </label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-3 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="text" id="query" name="query" value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>"  class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <button  type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>

</form>



<a style="background: red;"  href="/" class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>

        </div>   
    </div>
</section>







<?php include 'inc/footer.php';?>
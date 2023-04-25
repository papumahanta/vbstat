<?php 
$title = 'Profile';
$description='profiles';
$keywords='profile,vbstat';
include_once './assets/view/inc/header.php';
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
       



<section >
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">



          
      




<?php
    
    if (isset($_GET['message'])){
 echo ' <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">';
        echo $_GET['message'];
echo ' ; </h2>';


echo '<style>.grid.gap-8.lg\:gap-16.sm\:grid-cols-2.md\:grid-cols-3.lg\:grid-cols-4 {
    display: none;
} form {
    display: none;
}</style>';

echo '
  

<hr class=" my-8 w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

<a href="/profile" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Okk</a>


<a href="/contact" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact</a>

';

    }else{
        echo '<h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our team</h2>';
echo ' <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Say something</p>';
    }
?>






         

      </div> 
      <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
     






<?php
 foreach (array_diff(scandir("./assets/data/user/"), array('.', '..','upload_file.php','new')) as $uname) {
  if (strpos($uname, '.txt') !== false) {



$file_contents = file_get_contents("./assets/data/user/$uname");

// Split the contents into an array of lines
$lines = explode("\n", $file_contents);

// Extract the image name, about text, and social links from the lines
$name1=trim($lines[0]);
$about_text = trim($lines[1]);
$fb_links = trim($lines[2]);



$uname1=basename($uname,'.txt');
$uname2=ucfirst($uname1);

echo '

<div class="text-center text-gray-500 dark:text-gray-400">
<a href="/'.$uname1.'">
<img class="mx-auto mb-4 w-36 h-36 rounded-full" src="/assets/data/user/'.$uname1.'.jpg" alt="Bonnie Avatar">
<h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
'.$uname2.'
</h3>
</a>
<p>'.$about_text.'</p>

   <ul class="flex justify-center mt-4 space-x-4">
';



if ($fb_links=! 1) {
  echo'

                  <li>
                      <a href="'.$fb_links.'" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                      </a>
                  </li>
               

';
      }
        
              
echo "</ul></div>";


}

}
?>







       
      </div>  
  </div>
</section>








       <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    
    <form action="/assets/data/user/upload_file.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><br>
        Description: <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Few thing about you..."></textarea><br>
        Image: <input  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="file"><br>
        <input type="submit" name="submit" value="Submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    </form>



</div>










</div>
<?php include_once './assets/view/inc/footer.php'; ?>
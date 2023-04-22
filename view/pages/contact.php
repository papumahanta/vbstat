<?php 
$title = 'Contact';
$description='Contact page VBSTAT   -  this page is an unofficial and maintained by statistics students of department of statistics  visva bharati university';
$keywords='vbstat, statistics, department, lecture, pdf, note, visvabharati';
include_once './view/inc/header.php';
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">








<form method="post" action="/assets/data/contact/save.php">
   <p>

<div class="relative">
  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
  </div>
  <input  type="email" name="email" id="email" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your email">
</div>

     </p>   <p>
  <br>
  <textarea  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="message" id="message" required  placeholder="type your message"></textarea>
     </p><br>
  <input type="submit" value="Submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
</form>

<br>
<br>
<br>
<br>
<div class="inline-flex items-center justify-center w-full">
    <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
    <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-800">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
    </div>
</div>
<br>
<br>





<?php 

include "./assets/data/contact/messages.txt";

?>


<form method="post"  action="/assets/data/contact/save-message.php">



<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
<textarea  id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type something here..." required></textarea><br>
<input class="my-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Send">
</form>



.</p>

















</div>
<?php include_once './view/inc/footer.php'; ?>
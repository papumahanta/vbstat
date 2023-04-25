<?php
// Get the form data
$message = $_POST['message'];


$message = "  <div class='flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-700 dark:text-blue-400' role='alert'>
  <svg aria-hidden='true' class='flex-shrink-0 inline w-5 h-5 mr-3' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>  <path d='M14 0a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z'/>
</svg>

  <div>
    " . $message . "</div></div>






 ";



// Open the file for appending
$file = fopen('messages.txt', 'a');

// Write the data to the file
fwrite($file, "$message\n");

// Close the file
fclose($file);

// Redirect the user back to the form page
header('Location: /contact');
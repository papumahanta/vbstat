<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $data = "Email: $email\nMessage: $message\n\n";
  
  $file = fopen('data.txt', 'a');
  fwrite($file, $data);
  fclose($file);
  
  echo 'Data saved successfully!';
}


// Redirect the user back to the form page
header('Location: /contact');
?>

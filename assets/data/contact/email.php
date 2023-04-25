<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];

  
  $data = "Email: $email\n";
  
  $file = fopen('emails.txt', 'a');
  fwrite($file, $data);
  fclose($file);
  
  echo 'Data saved successfully!';
}


// Redirect the user back to the form page
header('Location: /?send=successfull');
?>
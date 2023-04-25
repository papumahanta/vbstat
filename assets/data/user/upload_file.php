<?php
if(isset($_POST['submit'])){
    $name = strtolower($_POST['name']); // convert name to lowercase
    $description = $_POST['description'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    // check if file with same name already exists
    $new_file_name = ''.$name.'.jpg';
    if(file_exists($new_file_name)){
        $message = "File with that name already exists.";
    } else {
        // move uploaded file to user folder with new name
        move_uploaded_file($file_tmp, $new_file_name);
        
        // save description as text file
        $txt_file_name = ''.$name.'.txt';
        $txt_file = fopen($txt_file_name, 'w');
        fwrite($txt_file, $name."\n".$description);
        fclose($txt_file);
        
        $message = "File uploaded successfully";
    }
    
    // redirect back to upload form with message
    header("Location:/profile?message=".urlencode($message));
    exit();
}
?>

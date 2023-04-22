<?php
$title = 'Department of Statistics VisvaBharati Unofficial';
$description = 'Lecture notes & gallery - this page is an unofficial and maintained by statistics students of department of statistics VisvaBharati University.';
$keywords = 'vbstat, statistics, department, lecture, pdf, note, visvabharati';
include_once '././assets/view/inc/header.php';
?>



<?php
$url ="{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
parse_str(parse_url($url)['query'], $params);

$photo=$params['photo'];






if(isset($_POST['textarea_content'])) {
    $content = $_POST['textarea_content'];
    $file = "$photo.txt"; // The name of the file you want to save the textarea content to
    file_put_contents($file, $content);
    echo "File saved successfully! <hr>

⚠ Save this link for future modification and reload the main page
";
}







?>



<form method="post">
    <textarea name="textarea_content"></textarea>
    <input type="submit" value="Save">
</form>





<?php include_once './assets/view/inc/footer.php'; ?>
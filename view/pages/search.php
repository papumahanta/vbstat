<?php 
$title = 'Search';
$description='Search iside vbstat';
$keywords='stat,search';
include_once './assets/view/inc/header.php';
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">

<style>
li.w-full.px-4.py-2.border-b.border-gray-200.dark\:border-gray-600 {
    word-wrap: break-word;
}
</style>

  





















<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">

<h1 class="flex justify-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Search</h1>

<p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">



<?php
// Define an array of texts
$texts = array(
  "Type Less : 'oper' for 'Operation recharch' ",
  "Type Less : 'demo' for 'Demography And Vital Statistics' ",


);

// Get a random element from the array
$random_text = $texts[array_rand($texts)];

// Print the random text to the screen
echo $random_text;
?>

</p>

<form class="w-full max-w-md mx-auto" method="get" action="">

 <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-3 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="text" id="query" name="query" value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>"  class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        <button  type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>

</form>
</div>











<form >   
   
</form>










<?php
// Set the path to the RSS feed
$feed_path = $_SERVER['DOCUMENT_ROOT'] . '/ror.xml';

// Get the keyword to search for from the query parameter
$keyword = $_GET['query'] ?? '';

// Load the RSS feed as a SimpleXMLElement object
$xml = simplexml_load_file($feed_path);

// Loop through the feed items and search for the keyword in the title, description, and link fields
$results = array();
foreach ($xml->channel->item as $item) {
    if (stripos($item->title, $keyword) !== false || stripos($item->description, $keyword) !== false || stripos($item->link, $keyword) !== false) {
        $results[] = (string) $item->link;
    }
}

// Display the results with links to the corresponding websites
if (count($results) > 0) {
    echo '<h2  class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Search Results:</h2>';
echo '<ol class="bg-gray-100  text-sm font-medium     rounded-lg  dark:bg-gray-700 dark:text-white">';
    foreach ($results as $result) {
        echo '<a href="' . $result . '"><li class="w-full px-4 py-2 dark:border-gray-600">' . $result . '</li></a>';
    }
echo '</ol>';
} else {
    echo '<p class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">No results found.</p>';
}
?>





</div>
<?php include_once './assets/view/inc/footer.php'; ?>
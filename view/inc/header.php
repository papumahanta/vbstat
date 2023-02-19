<?php
// Direct url access deny
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied!</h2> This file is protected and not available to public.");
}
$url = (isset($_SERVER['HTTPS']) ? 'http' : 'https') . "://" . $_SERVER['SERVER_NAME'];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VBSTAT - <?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo $url; ?>/favicon.png">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="vbstat">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="<?php echo $url; ?>/assets/view/css/style.css?chage=6" />
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/view/css/tailwind.css" />
    

    <link rel="canonical"
        href="<?php echo (isset($_SERVER['HTTPS']) ? "http" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">




<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>


<style>
::-webkit-scrollbar {
    display: none;
}
.project-a {
    padding-right: 0px!important;
}
</style>



</head>
<body class=" dark:bg-gray-800">
























    <nav class=" border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="<?php echo $url; ?>/" class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/Biswabharati_logo.svg/640px-Biswabharati_logo.svg.png"
                    class="h-6 mr-3 sm:h-9" alt="VisvaBharati" />
                <!--This Logo is used from wikipedia-->
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">VBSTAT</span>
            </a>
            <div class="flex items-center">

                <a href="https://github.com/vbstat"
                    class="mr-6 text-sm font-medium text-gray-500 dark:text-white">
                    Login
                </a>
                

<button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>







            </div>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
            <div class="flex items-center">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <a href="<?php echo $url; ?>/" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/notes" class="text-gray-900 dark:text-white hover:underline">Notes</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/gallery" class="text-gray-900 dark:text-white hover:underline">Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/about" class="text-gray-900 dark:text-white hover:underline">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main data-vbstat id="content">
        <article data-vbstat-view>
            <?php
            $curl = (isset($_SERVER['HTTPS']) ? "http" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $parts = parse_url($curl);
            $path_parts = explode('/', $parts[path]);
            $p1 = $path_parts[1];
            $p2 = $path_parts[2];
            $p3 = $path_parts[3];
            ?>
            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <?php
                            if ($p1 != NULL)
                                echo '<a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
<svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
Home
</a>
';
                            ?>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <?php
                                if ($p2 == NULL && $p1 != NULL) {




                                    echo '<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
<span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400"> ' . $p1 . '</span>
';

                                }



                                ?>
                                <?php
                                if ($p2 != NULL && $p2 != "file.php")
                                    echo '<svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
<a href="/' . $p1 . '" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white"> ' . $p1 . '</a>
';
                                ?>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <?php
                                if ($p2 != NULL && $p2 != "file.php")
                                    echo ' <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
<span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400"> ' . $p2 . '</span>
';
                                ?>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
















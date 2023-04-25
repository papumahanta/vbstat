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
    <title><?php echo $title; ?> - VBSTAT</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $url; ?>/favicon.png">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="vbstat">



    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/tailwind.css" />
    

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

a.ml-1.text-sm.font-medium.text-gray-700.hover\:text-blue-600.md\:ml-2.dark\:text-gray-400.dark\:hover\:text-white {
    text-transform: capitalize;
}
pre {
    overflow: auto;
}
</style>



</head>
<body class=" dark:bg-gray-800">
















    <nav class=" border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="<?php echo $url; ?>/" class="flex items-center"  title="Department of Statistics Visva Bharati University">
                <img src="<?php echo $url; ?>/img/p/visvabharati-logo.jpg"
                    class="h-6 mr-3 sm:h-9" alt="VisvaBharati" />
                <!--This Logo is used from wikipedia-->
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">VBSTAT</span>
            </a>
            <div class="flex items-center">

                <a href="https://github.com/vbstat" target='_blank'
                   class="text-gray-500 dark:text-gray-400   focus:outline-none   rounded-full text-sm p-2.5 mx-1"   title="Make changes via Github"> <!--  class="mr-6 text-sm font-medium text-gray-500 dark:text-white" -->
                  

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg>

                </a>
                

<button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400  rounded-full text-sm p-2.5 mx-1"   title="Change theme">
    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>








<!--

  <a href="/login" 
                   class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"   title="Login">  
                  

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>

                </a>

-->













            </div>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
            <div class="flex items-center">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <a href="<?php echo $url; ?>/" class="text-gray-900 dark:text-white hover:underline" aria-current="page"  title="Homepage VBSTAT ">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/notes" class="text-gray-900 dark:text-white hover:underline" title="Paper name list indexing by name">Notes</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/gallery" class="text-gray-900 dark:text-white hover:underline"  title="Photos and gallery VBSTAT">Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/about" class="text-gray-900 dark:text-white hover:underline"  title="About VBSTAT">About</a>
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
            $p4 = $path_parts[4];
            ?>
            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">














          
<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">





  <?php 
    if ($p1 != NULL) {
    ?>

    <li class="inline-flex items-center">
      <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Home
      </a>
    </li>

    <?php 
    }
    ?>






  <?php 
    if ($p1 != NULL) {
    ?>

    <li>
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="<?php echo "/$p1" ?>" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">

        <?php echo $p1 ?>
        
        </a>
      </div>
    </li>

    <?php 
    }
    ?>








    <?php 
    if ($p2 != NULL) {
    ?>
    
    <li>
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="<?php echo "/$p1/$p2" ?>" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">
             <?php echo $p2 ?>
        </a>
      </div>
    </li>


    <?php 
    }
    ?>








    <?php 
    if ($p3 != NULL) {
    ?>

    <li aria-current="page">
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">
             <?php echo $p3 ?>
        </span>
      </div>
    </li>

    <?php 
    }
    ?>






    
  </ol>
</nav>








            </div>



















































<?php
$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}
// Include the Router class
// @note: it's recommended to just use the composer autoloader when working with other packages too
require_once __DIR__ . '/assets/view/system/router.php';
// Create a Router
$router = new \Vbstat\Router\Router();
// Custom 404 Handler
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include './assets/view/pages/404.php';
});

// Before Router Middleware
$router->before('GET', '/.*', function () {
    header('mrinal');
});
// Static route: / (homepage)
$router->get('/', function () {
    include './assets/view/pages/home.php';
});


// Static route: /notes
$router->get('/notes', function () {
    include './assets/view/pages/notes.php';
});

// Dynamic route: /paper
foreach (array_diff(scandir("./assets/pdf"), array('.', '..')) as $file) {
    $router->get("/notes/$file", function () {
        include './assets/view/pages/notes.details.php';
    });
}

// Static route: /gallery
$router->get('/gallery', function () {
    include './assets/view/pages/gallery.php';
});

// Dynamic route: /gallery-photos
foreach (array_diff(scandir("./assets/img/2021"), array('.', '..')) as $file) {
    $router->get("/gallery/$file", function () {
        include './assets/view/pages/gallery.details.php';
    });
}



// Dynamic route: /gallery-photos
foreach (array_diff(scandir("./assets/img/2022"), array('.', '..')) as $file) {
    $router->get("/gallery/$file", function () {
        include './assets/view/pages/gallery.details.php';
    });
}











// Dynamic route: /gallery-photos
foreach (array_diff(scandir("./assets/img"), array('.', '..')) as $file) {
    $router->get("/gallery/$file", function () {
        include './assets/view/pages/gallery.details.php';
    });
}



// Static route: /about
$router->get('/about', function () {
    include './assets/view/pages/about.php';
});



// Static route: /privacy-policy
$router->get('/privacy-policy', function () {
    include './assets/view/pages/privacy-policy.php';
});




// Static route: /prpjects
$router->get('/projects', function () {
   


$title = 'Projects ';
$description='google drive projects';
$keywords='project,assignment';
include_once './assets/view/inc/header.php';

echo '<div class="project-a max-w-screen-xl px-4 py-3 mx-auto md:px-6">';
echo'<h1 class="mb-4 text-3xl text font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Project</span> 2022</h1>';
echo '<iframe src="https://drive.google.com/embeddedfolderview?id=1qXlZR18_sCcDVky5kDoM5_GbIcBPDoD3#grid" style="width:100%; height:100vh; border:0;"></iframe>';


echo'<h1 class="mb-4 text-3xl text font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Project</span> 2023</h1>';


echo '</div>';
 include_once './assets/view/inc/footer.php';
});











// Thunderbirds are go!
$router->run();
// EOF
?>
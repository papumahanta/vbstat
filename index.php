<?php
$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}
// Include the Router class
// @note: it's recommended to just use the composer autoloader when working with other packages too
require_once __DIR__ . '/view/system/router.php';
// Create a Router
$router = new \Vbstat\Router\Router();
// Custom 404 Handler
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include './view/pages/404.php';
});

// Before Router Middleware
$router->before('GET', '/.*', function () {
    header('mrinal');
});
// Static route: / (homepage)
$router->get('/', function () {
    include './view/pages/home.php';
});

























// Static route: /home
$router->get('/home', function () {
    include './view/pages/home.php';
});



// Static route: /notes
$router->get('/notes', function () {
    include './view/pages/notes.php';
});

// Dynamic route: /paper
foreach (array_diff(scandir("./note"), array('.', '..', 'ge-math', 'previous-year-questions')) as $file) {
    $router->get("/notes/$file", function () {
        include './view/pages/notes.details.php';
    });
}




// ge and pew
// Dynamic route: /paper
foreach (array_diff(scandir("./note"), array('.', '..')) as $file) {
    $router->get("/notes/$file", function () {
        include './view/pages/notes.sem.details.php';
    });
}






// ge and pew
// Dynamic route: /paper
foreach (array_diff(scandir("./note"), array('.', '..')) as $file) {
    foreach (array_diff(scandir("./note/$file"), array('.', '..')) as $files) {



        $router->get("/notes/$file/$files", function () {
            include './view/pages/notes.sem.details.php';
        });


    }
}



























// Static route: /gallery
$router->get('/gallery', function () {
    include './view/pages/gallery.php';
});






// Dynamic route: /gallery-photos
foreach (array_diff(scandir("./img"), array('.', '..', 'p')) as $imgFolder) {
    foreach (array_diff(scandir("./img/$imgFolder"), array('.', '..')) as $file) {

        $modified_string = str_replace(".jpg", "", $file);

        $router->get("/gallery/$modified_string", function () {
            include './view/pages/gallery.details.php';
        });
    }
}

















// Static route: /about
$router->get('/about', function () {
    include './view/pages/about.php';
});



// Static route: /privacy-policy
$router->get('/privacy-policy', function () {
    include './view/pages/privacy-policy.php';
});




// Static route: /prpjects
$router->get('/projects', function () {



    $title = 'Projects ';
    $description = 'google drive projects';
    $keywords = 'project,assignment';
    include_once './view/inc/header.php';

    echo '<div class="project-a max-w-screen-xl px-4 py-3 mx-auto md:px-6">';
    echo '<h1 class="mb-4 text-3xl text font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Project</span> 2022</h1>';
    echo '<iframe src="https://drive.google.com/embeddedfolderview?id=1qXlZR18_sCcDVky5kDoM5_GbIcBPDoD3#grid" style="width:100%; height:100vh; border:0;"></iframe>';


    echo '<h1 class="mb-4 text-3xl text font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Project</span> 2023</h1>';


    echo '</div>';
    include_once './view/inc/footer.php';
});



















// Static route: /home
$router->get('/about/facuities', function () {
    include './view/pages/facuities.php';
});


// Static route: /home
$router->get('/about/mission-vision', function () {
    include './view/pages/visva-bharati-mission-vision.php';
});





// Static route: /contact
$router->get('/contact', function () {
    include './view/pages/contact.php';
});


// Static route: /notes
$router->get('/faq', function () {
    include './view/pages/faq.php';
});





// Static route: /profile
$router->get('/profile', function () {
    include './view/pages/profile.php';
});







// Static route: /search
$router->get('/search', function () {
    include './view/pages/search.php';
});







// Static route: /user
foreach (array_diff(scandir("./assets/data/user"), array('.', '..')) as $suser) {
    $suser = basename($suser, '.txt');
    $router->get("/$suser", function () {
        include './view/pages/profile.details.php';
    });

}




// Dynamic route: /pdf/name/in/parts
$router->get('/note.view/web/(.*)', function ($url9) {

    include './note.view/web/viewer.php';


});





// Static route: /login
$router->get('/login', function () {
    include './view/pages/profile.php';
});





// Thunderbirds are go!
$router->run();
// EOF
?>
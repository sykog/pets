<?php
// require autoload file
require_once('vendor/autoload.php');

// create instance of base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    $view = new View();

    echo $view->render
    ('views/home.html');
}
);

// run fat free
$f3->run();

?>

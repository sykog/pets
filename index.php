<?php
// require autoload file
require_once('vendor/autoload.php');

// create instance of base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
    echo '<h1>Pets Home</h1>';

}
);

// run fat free
$f3->run();

?>

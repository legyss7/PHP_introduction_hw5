<?php 


spl_autoload_register('loader');

function loader($className) {
    var_dump($className);
    require "$className.php";
}

$test = new Test();

var_dump($test);


// docker run --rm -v ${pwd}/task1/:/task1 php:8.2-cli php /task1/index.php
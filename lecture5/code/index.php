<?php 

/* <per><? var_dump($_SERVER); ?></per>

docker-compose up -d

*/

require_once('./vendor/autoload.php');



// use Geekbrains\Application1\Controllers\PageController;

// $app = new PageController();
// $app->actionIndex();



use Geekbrains\Application1\Application;

$app = new Application();
echo $app->run();






// docker container run -it -v ${pwd}/code/:/code  -w /code composer install
// docker container run --rm -it -v ${pwd}/code:/code -w /code php:8.2-cli php index.php

// docker container run -it -v ${pwd}/code/:/code  -w /code composer require "twig/twig:^3.0"






// docker-compose up -d

// docker-compose down 
// docker-compose up --build
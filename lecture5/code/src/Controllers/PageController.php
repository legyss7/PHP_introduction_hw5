<?php

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Application;
use Geekbrains\Application1\Render;

class PageController {

    public function actionIndex() {
        // echo "Hello";

        // return "Hello";

        $render = new Render();

        //Тест
        echo Application::config()['storage']['address'];

        return $render->renderPage('page-index.twig', [
            'title' => 'Главная страница',
            'time' => date("Y-m-d H:i:s")
        ]);
    }
}
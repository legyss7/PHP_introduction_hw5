<?php

$name = 'Админ';
$text = "Привет мир!";

// include "template/main.php";

// Функция для рендеринга основного шаблона
function render(string $page, array $params = []): string {
    // Добавляем заголовок и футер в параметры
    $params['header'] = renderTemplate('header'); // Рендерим заголовок
    $params['footer'] = renderTemplate('footer'); // Рендерим футер
    
    return renderTemplate($page, $params); // Рендерим основной шаблон
}

// Функция для рендеринга отдельных шаблонов
function renderTemplate(string $page, array $params = []): string {
    ob_start();
    extract($params); // Извлекаем переменные из массива
    include "template/{$page}.php"; // Включаем нужный шаблон
    return ob_get_clean();
}

// Рендерим основной шаблон, передавая все необходимые параметры
echo render('main', [
    'name' => $name,
    'content' => $text
]);


// function render(string $page, array $params = []): string {
//     ob_start();
//     extract($params);
//     include "template/main.php";
//     return ob_get_clean();
// }

// echo render('main', [
//     'name' => $name,
//     'content' => $text
// ]);



// для запуска 
// docker-compose up --build
// docker-compose down
// docker-compose logs -f


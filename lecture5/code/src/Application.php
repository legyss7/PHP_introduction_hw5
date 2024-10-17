<?php

namespace Geekbrains\Application1;

final class Application {

    private const APP_NAMESPACE = 'Geekbrains\Application1\Controllers\\';

    private string $controllerName;
    private string $methodName;
    private static array $config;

    public static function config(): array {
        return Application::$config;
    }

    public function run() : string {
        Application::$config = parse_ini_file('config.ini', true);

        // var_dump($_SERVER);

        //форматированный вывод
        // echo "<pre>";
        // print_r( $_SERVER);
        // echo "php version " . phpversion();

        // разбиваем адрес по символу слэша        
        // определяем имя контроллера
        // проверяем контроллер на существование
        // создаем экземпляр контроллера, если класс существует 
        // проверяем метод на существование 
        // вызываем метод, если он существует

        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if(isset($routeArray[1]) && $routeArray[1] != '') {
            $controllerName = $routeArray[1];
        }
        else{
            $controllerName = "page";
        }

        $this->controllerName = Application::APP_NAMESPACE . ucfirst($controllerName) . "Controller";

        if(class_exists($this->controllerName)){
            // пытаемся вызвать метод
            if(isset($routeArray[2]) && $routeArray[2] != '') {
                $methodName = $routeArray[2];
            }
            else {
                $methodName = "index";
            }

            $this->methodName = "action" . ucfirst($methodName);

            if(method_exists($this->controllerName, $this->methodName)){
                $controllerInstance = new $this->controllerName();
                // $method = $this->methodName;
                // return $controllerInstance->$method();
                return call_user_func_array(
                    [$controllerInstance, $this->methodName],
                    []
                );
            }
            else {
                header("HTTP/1.1 404 Not FOund");
                header("Location: /404.html");
                die();
                return "Метод не существует";
            }
        }
        else{
            header("HTTP/1.1 404 NOt Found");
            header("Location: /404.html");
            die();
            // return "Класс $this->controllerName не существует";
        }
    }

    public function render(array $pageVariables) {
        
    }
}


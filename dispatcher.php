<?php
class Dispatcher
{
    private $request;
    public function dispatch(){
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);
        $controller = $this->loadController();
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }
    public function loadController(){
        $name = $this->request->controller;
        $file = ROOT . 'controllers/' . $name . '.php';
        if(!file_exists($file)){
            $name = 'main';
            $this->request->action = 'error_404';
            require(ROOT.'controllers/main.php');
        }else{
            require($file);
        }
        $name = ucfirst($name).'Controller';
        $controller = new $name();
        return $controller;
    }
}

?>
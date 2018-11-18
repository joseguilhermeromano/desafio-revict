<?php 
class Router {
    static public function parse($url, $request){
        $url = trim($url);
        if ($url == "/desafiorevict/"){
            $request->controller = "main";
            $request->action = "home";
            $request->params = [];
        }
        else{
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            if(!empty($explode_url[1])){
                $request->action = 
                self::removeQueryStringVariables($explode_url[1]);
            }else{
                $request->controller = 'main';
                $request->action = 'error_404';
            }
            $request->params = array_slice($explode_url,2);
        }
    }

    private function removeQueryStringVariables($url){
        $position = strrpos($url, '?');
        if ($position === false) {
            return $url;
        }
        $queryStrings = substr($url, $position, strlen($url));
        return str_replace($queryStrings, '', $url);
    }
}
?>
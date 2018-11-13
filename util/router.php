<?php

//Lista das páginas que seu site pode exibir
$controller_list=array(
    "main"=> array("home","examples","error")
);

if(array_key_exists($controller,$controller_list)){
    if(in_array($action,$controller_list[$controller])){
        call($controller,$action);
    }else{
        call('main','error');
    }
}else{
        call('main','error');
}

//cria o objeto controlador e executa a ação solicitada
function call($controller,$action){
    include_once '/controllers/'.$controller.'_controller.php';
    $object = ucfirst($controller)."Controller";
    $control = new $object;
    $control->{$action}();
}


?>


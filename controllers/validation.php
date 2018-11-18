<?php 
include_once "../core/controller.php";

class ValidationController extends Controller{

    public function cpf(){
        $cpf = null;
        if(isset($_GET['cpf'])){
            $cpf = $_GET['cpf'];
        }
		$validacao = FormValidation::valid_cpf($cpf); 

		if(!empty($cpf) && $validacao == true){
			return http_response_code(200);
		}
			return http_response_code(401);
	}
}
?>
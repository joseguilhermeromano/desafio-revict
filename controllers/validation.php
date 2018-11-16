<?php 
include_once "../core/formvalidation.php";

class ValidationController extends FormValidation{

    public function cpf(){
        $cpf = null;
        if(isset($_GET['cpf'])){
            $cpf = $_GET['cpf'];
        }
		$validacao = $this->valid_cpf($cpf); 

		if(!empty($cpf) && $validacao == true){
			return http_response_code(200);
		}
			return http_response_code(401);
	}
}
?>
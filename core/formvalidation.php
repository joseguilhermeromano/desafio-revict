<?php 
class FormValidation{

    public static function valid_cpf($cpf){

        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }

    public static function valida_cliente(){
        $errors = array(); 
        $validation = true;
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
    
        
        if(strlen(trim($nome)) === 0){
            $errors[] = "Você deve digitar o seu nome!";
            $validation = false;
        }

        if(strlen(trim($sobrenome)) === 0) {
            $errors[] = "Você deve digitar o seu sobrenome!";
            $validation = false;
        }
    
        if(strlen(trim($cpf)) === 0 || self::valid_cpf($cpf) == false){
            $errors[] = "O CPF informado é inválido!";
            $validation = false;
        }
        if(!empty($errors)){
            validation_errors($errors);
        }
        return $validation;
    }

}
?>
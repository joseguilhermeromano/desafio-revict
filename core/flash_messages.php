<?php 
/**
 * Function to create and display error and success messages
 * @access public
 * @param string session name
 * @param string message
 * @param string display class
 * @return string message
 */
function flash( $name = '', $message = '', $class = 'alert alert-success' ){
    //We can only do something if the name isn't empty
    if( !empty( $name ) )
    {
        //No message, create it
        if( !empty( $message ) && empty( $_SESSION[$name] ) ){
            if( !empty( $_SESSION[$name] ) )
            {
                unset( $_SESSION[$name] );
            }
            if( !empty( $_SESSION[$name.'_class'] ) )
            {
                unset( $_SESSION[$name.'_class'] );
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }elseif( !empty( $_SESSION[$name] ) && empty( $message ) )
        {
            $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
            echo '<div class="text-center '.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}

function validation_errors($errors=''){
    if(!empty($errors) && empty($_SESSION['validation_errors'])){
        if(!empty($_SESSION['validation_errors'])){
            unset($_SESSION['validation_errors']);
        }
        $_SESSION['validation_errors'] = $errors;
    }elseif(isset($_SESSION['validation_errors']) && empty($errors)){
        echo '<div class="alert alert-danger" id="msg-flash">';
        echo '<h4><b><span class="glyphicon glyphicon-exclamation-sign"></span> '.
        'Erros de Validação:</b></h4>';
        foreach($_SESSION['validation_errors'] as $errorMessage){
            echo $errorMessage . '<br>';
        }
        echo '</div>';
    }
}

?>
<?php

/**
 * Classe de controle do login. Requisitará o model ou o view login.
 *
 * @author HENRIQUE
 */
class loginController extends controller {

    private $usuario;
    
    public function index() {
        $dados = array('erro' => '');

        if ((!empty(filter_input(INPUT_POST, 'usuario'))) && (!empty(filter_input(INPUT_POST, 'senha')))) {

            $usuario = addslashes(filter_input(INPUT_POST, 'usuario'));
            $senha = md5(filter_input(INPUT_POST, 'senha'));
            
            $this->usuario = new Usuario();
            $retorno = $this->usuario->logar($usuario, $senha);
            
            if ($retorno){              
                header("Location: ". BASE);
            }else{
                $dados['erro'] = "E-mail e/ou senha errados!";
            }
                
        }


        $this->loadView('login', $dados);
    }
    
    public function sair(){
        unset($_SESSION['doce']);
        header("Location: ". BASE);
        die();
    }

}

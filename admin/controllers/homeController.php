<?php

/**
 * Classe de controle da home. Requisitará o model ou o view home.
 *
 * @author HENRIQUE
 */
class homeController extends controller {

    private $usuario;
   
    
    public function __construct() {
        
        $this->usuario = new Usuario();
        
        if ($this->usuario->logado()){
            $this->usuario = new Usuario($_SESSION['doce']);
            
        }else{
            header("Location: ".BASE.'/login');
        }
       
        
    }
    
    public function index(){
        $dados = array();
        
        $this->loadTemplate('home', $dados);
    }

}

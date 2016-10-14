<?php

/**
 * Classe de controle da home. Requisitará o model ou o view home.
 *
 * @author HENRIQUE
 */
class homeController extends controller {
    
  
    
    public function index(){
        $dados = array();
        
        $home = new Empresa();
        $dados['home'] = $home->getDescricao();
        
        $this->loadTemplate('home', $dados);
    }

}

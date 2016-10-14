<?php

/**
 * Classe de controle da empresa. Requisitará o model ou o view empresa.
 *
 * @author HENRIQUE
 */
class empresaController extends controller {
    
    

    public function index() {

        $dados = array();

       $empresa = new Empresa();
       $dados['empresa'] = $empresa->getSobre();

  


        $this->loadTemplate('empresa', $dados);
    }

}

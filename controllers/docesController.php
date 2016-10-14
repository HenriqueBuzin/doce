<?php

/**
 * Classe de controle dos doces. Requisitará o model ou o view doce.
 *
 * @author HENRIQUE
 */
class docesController extends controller {

    public function index() {

        $dados = array();

       $doce = new Doce();
       $dados['doce'] = $doce->getDoces();



        $this->loadTemplate('doces', $dados);
    }

  

}

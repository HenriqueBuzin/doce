<?php

/**
 * Classe de controle do endereco. Requisitará o model ou o view contato.
 *
 * @author HENRIQUE
 */
class contatoController extends controller {
 

    public function index() {
        $dados = array();

        $contato = new Endereco();
        $dados['contato'] = $contato->getContato();

        $this->loadTemplate('contato', $dados);

    }
}

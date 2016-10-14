<?php

/**
 * Classe de controle do endereco. Requisitará o model ou o view contato.
 *
 * @author HENRIQUE
 */
class contatoController extends controller {
    
    private $usuario;
    
    public function __construct(){
         $this->usuario = new Usuario();

        $retorno = $this->usuario->logado();

        if (!$retorno) {
            header('Location: ' . BASE . '/login');
        }
    }

    public function index() {
        $dados = array();

        $contato = new Endereco();       

        $dados['contato'] = $contato->getContato();

        $this->loadTemplate('contato', $dados);


        if (!empty(filter_input(INPUT_POST, 'rua')) || !empty(filter_input(INPUT_POST, 'cidade')) || !empty(filter_input(INPUT_POST, 'complemento')) || !empty(filter_input(INPUT_POST, 'telefone'))) {


            $rua = addslashes(filter_input(INPUT_POST, 'rua'));
            $cidade = addslashes(filter_input(INPUT_POST, 'cidade'));
            $complemento = addslashes(filter_input(INPUT_POST, 'complemento'));
            $telefone = addslashes(filter_input(INPUT_POST, 'telefone'));

            $array = array(
                'rua' => $rua,
                'cidade' => $cidade,
                'complemento' => $complemento,
                'telefone' => $telefone
            );

            $update = $contato->updateEndereco($array);
            
          
        }
    }

}

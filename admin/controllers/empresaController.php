<?php

/**
 * Classe de controle da empresa. Requisitará o model ou o view empresa.
 *
 * @author HENRIQUE
 */
class empresaController extends controller {
    
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

        $empresa = new Empresa();
        

        $dados['empresa'] = $empresa->getEmpresa();

        if ((!empty(filter_input(INPUT_POST, 'sobre'))) || (!empty(filter_input(INPUT_POST, 'descricao')))) {
            $sobre = addslashes(filter_input(INPUT_POST, 'sobre'));
            $descricao = addslashes(filter_input(INPUT_POST, 'descricao'));

            $array = array(
                'sobre' => $sobre,
                'descricao' => $descricao
            );

            $update = $empresa->updateEmpresa($array);

            if ($update) {
                Header('Location: ' . filter_input(INPUT_SERVER, 'PHP_SELF'));
                Exit();
            }
        }


        $this->loadTemplate('empresa', $dados);
    }

}

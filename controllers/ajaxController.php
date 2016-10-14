<?php

/**
 * Classe de controller que tratará funções do javascript
 *
 * @author HENRIQUE
 */
class ajaxController extends controller {
    
    private $usuario;
    
    public function __construct() {
        $this->usuario = new Usuario();

        $retorno = $this->usuario->logado();

        if (!$retorno) {
            header('Location: ' . BASE . '/login');
        }
    }

    public function index() {
        
    }

    public function excluirDoce() {

        $id = filter_input(INPUT_POST, 'id');
        if (isset($id) && !empty($id)) {

            $doce = new Doce();
            $excluir = $doce->excluirDoce($id);

            if ($excluir) {
                //fazer um atualizar pagina ao excluir
            }
        }
    }

}

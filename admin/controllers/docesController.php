<?php

/**
 * Classe de controle dos doces. Requisitará o model ou o view doce.
 *
 * @author HENRIQUE
 */
class docesController extends controller {

    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();

        $retorno = $this->usuario->logado();

        if (!$retorno) {
            header('Location: ' . BASE . '/login');
        }
    }

    public function index() {

        $dados = array();

        $doce = new Doce();

        $dados['doces'] = $doce->getDoces();



        $this->loadTemplate('doces', $dados);
    }

    public function cadastrar() {
        $dados = array(
            'mensagem' => ''
        );
        $array = array();

        $doce = new Doce();

        if (!empty(filter_input(INPUT_POST, 'nomeDoce')) && !empty(filter_input(INPUT_POST, 'descricao'))) {
            $nomeDoce = addslashes(filter_input(INPUT_POST, 'nomeDoce'));
            $descricao = addslashes(filter_input(INPUT_POST, 'descricao'));

            $array = array(
                'nome' => $nomeDoce,
                'descricao' => $descricao
            );

            $cadastrar = $doce->cadastrarDoce($array);

            if ($cadastrar) {
                header("Location: " . BASE . "/doces");
            }
        } else if (empty(filter_input(INPUT_POST, 'nomeDoce')) && !empty(filter_input(INPUT_POST, 'descricao'))) {
            $dados['mensagem'] = "Preencha o nome do Doce.";
        } else if (!empty(filter_input(INPUT_POST, 'nomeDoce')) && empty(filter_input(INPUT_POST, 'descricao'))) {
            $dados['mensagem'] = "Preencha uma descrição para o doce.";
        } else if ((filter_has_var(INPUT_POST, 'nomeDoce')) && empty(filter_input(INPUT_POST, 'nomeDoce')) && empty(filter_input(INPUT_POST, 'descricao'))) {
            $dados['mensagem'] = "Preencha um Nome e uma descrição para o doce.";
        }

        $this->loadTemplate('cadastrar_doce', $dados);
    }

    public function editar($id) {
        $dados = array();

        $doce = new Doce();

        // retorna informações do doce conforme id
        if (!empty($id)) {
            $id = addslashes($id);

            $dados['doces'] = $doce->retornarDoce($id);
        }

        //edita doce
        if (!empty(filter_input(INPUT_POST, 'nomeDoce')) && !empty(filter_input(INPUT_POST, 'descricao'))) {
            $nomeDoce = addslashes(filter_input(INPUT_POST, 'nomeDoce'));
            $descricao = addslashes(filter_input(INPUT_POST, 'descricao'));

            $array = array(
                'id' => $id,
                'nome' => $nomeDoce,
                'descricao' => $descricao
            );

            $editar = $doce->updateDoce($array);

             if ($editar) {
                header("Location: " . BASE . "/doces");
            }
            
        } else if (empty(filter_input(INPUT_POST, 'nomeDoce')) && !empty(filter_input(INPUT_POST, 'descricao'))) {
            $dados['mensagem'] = "Preencha o nome do Doce.";
        } else if (!empty(filter_input(INPUT_POST, 'nomeDoce')) && empty(filter_input(INPUT_POST, 'descricao'))) {
            $dados['mensagem'] = "Preencha uma descrição para o doce.";
        } else if ((filter_has_var(INPUT_POST, 'nomeDoce')) && empty(filter_input(INPUT_POST, 'nomeDoce')) && empty(filter_input(INPUT_POST, 'descricao'))) {
            $dados['mensagem'] = "Preencha um Nome e uma descrição para o doce.";
        }



        $this->loadTemplate('editar_doce', $dados);
    }

}

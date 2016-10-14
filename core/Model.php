<?php

/**
 * cLASSE COM MÉTODO DE CONEXÃO COM O BANCO DE DADOS. SERVIRÁ DE HERANÇA PARA TODOS OS MODELS CRIADOS.
 *
 * @author HENRIQUE
 */
class Model {

    protected $db;
    

    public function __construct() {
        global $config;
        
        try {
            //Realizando conexão com banco de dados
            $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'] . ";charset=" . $config['charset'], $config['dbuser'], $config['pass']);

            //Contantes para verificação de erros
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->db;
        } catch (PDOException $e) {
            //Se a tentativa de conexão falhar, executa o bloco de comandos de exceção
            echo "Erro: " . $e->getMessage();    //Mostra o erro no mysql
            //Mata a execução do programa mostrando a seguinte mensagem em vermelho
            die("<p style='color: #990000;'>Erro tentando conectar-se ao banco!</p>");
        }
    }

}

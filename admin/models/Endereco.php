<?php

/**
 * Classe responsável por fazer as requisições ao banco. 
 * Classe: Empresa
 * @author HENRIQUE
 */
class Endereco extends model {

    public function getContato() {

        $array = array();

        try {
            $sql = "SELECT * FROM endereco";
            $sql = $this->db->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function updateEndereco($array = array()){
        
        try {
            $sql = "UPDATE endereco SET rua = :rua, cidade = :cidade, complemento = :complemento, telefone = :telefone ";
            $sql = $this->db->prepare($sql);
            foreach ($array as $valor => $campo){
                $sql->bindValue(":".$valor, $campo);
            }
            
            $sql->execute();
            
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        
    }

}

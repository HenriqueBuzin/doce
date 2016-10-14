<?php

/**
 * Classe responsável por fazer as requisições ao banco. 
 * Classe: Empresa
 *
 * @author HENRIQUE
 */
class Empresa extends model {

    public function getEmpresa() {

        $array = array();

        try {
            $sql = "SELECT * FROM empresa";
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

    public function updateEmpresa($array = array()) {
        

        try {
            $sql = "UPDATE empresa SET sobre = :sobre, descricao = :descricao";
            $sql = $this->db->prepare($sql);

            foreach ($array as $valor => $campo) {
              $sql->bindValue(":" . $valor, $campo);
            }
            
            $sql->execute();
            
            return true;
        } catch (PDOException $e) {
            $e->getMessage();
            return false;
        }
    }

}

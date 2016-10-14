<?php

/**
 * Classe responsável por fazer as requisições ao banco. Classe: Doce
 * Classe: Doce
 * @author HENRIQUE
 */
class Doce extends model {

    public function getDoces() {
        $array = array();


        try {
            $sql = "SELECT * FROM doce ORDER BY nome ASC";
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
    
    public function retornarDoce($id){
        
        $array = array();
        
        try {
            $sql = "SELECT * FROM doce WHERE idDoce = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();
            
            if ($sql->rowCount() > 0){
                $array = $sql->fetch();
            }
        
            
            return $array;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function cadastrarDoce($array = array()){
        
        try {
            $sql = "INSERT INTO doce (nome,descricao) VALUES (:nome, :descricao)";
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
    
    public function excluirDoce($id){
        
        try {
            $sql = "DELETE FROM doce WHERE idDoce = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        
    }
    
    public function updateDoce($array = array()){
        
        try {
            $sql = "UPDATE doce SET nome = :nome, descricao = :descricao WHERE idDoce = :id";
            $sql = $this->db->prepare($sql);
            foreach ($array as $valor => $campo){
                $sql->bindValue(":".$valor , $campo);
            }
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        
    }
    
  

}

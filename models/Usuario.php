<?php

/**
 * Classe responsável por fazer as requisições ao banco. 
 * Classe: Usuario
 * @author HENRIQUE
 */
class Usuario extends model{
    
       
    public function logado(){
        
        if (isset($_SESSION['doce']) && !empty($_SESSION['doce'])){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function logar($usuario, $senha){
        
        $array = array();
        
        try {
            $sql = "SELECT * FROM usuario WHERE user = :usuario AND senha = :senha";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":usuario", $usuario);
            $sql->bindValue(":senha", $senha);
            $sql->execute();
            
            if ($sql->rowCount() > 0){
                $array = $sql->fetch();
                $_SESSION['doce'] = $array['id'];
                return true;
            }else{
                return false;
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
    
}

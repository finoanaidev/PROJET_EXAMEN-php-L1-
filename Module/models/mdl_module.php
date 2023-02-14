<?php 

class mdl_modules{
    
    //retourner requetes mysql pour les listes
    public function list()
    {
        return 'SELECT * FROM mdl_modules';
    }

    public function insert($data)
    {
        return 'INSERT INTO mdl_modules (code_module, nom_module, volume_horaire, credit_module) VALUES ("'.$data['code'].'", "'.$data['nom'].'", "'.$data['heure'].'", "'.$data['credit'].'")' ;
    }

    public function delete($id)
    {
        return "DELETE FROM mdl_modules WHERE id = ".$id;
    }

    public function select($id)
    {
        return "SELECT * FROM mdl_modules WHERE id = ".$id;
    }

    public function update($data)
    {
        return "update mdl_modules set code_module = '".$data['code']."', nom_module = '".$data['nom']."', volume_horaire ='".$data['heure']."', credit_module = '".$data['credit']."' where id =".$data['id'];
    }
}
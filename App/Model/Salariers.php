<?php

namespace App\Model;

use Kernel\Connexion;

class Salariers{
    public static function all(){
        $query = 'SELECT * FROM salariers';
        return Connexion::query($query);
    }
    public static function particle($id){
        $query = "SELECT * FROM salariers WHERE id=$id";
        return Connexion::query($query);
        
    }
    public static function insert(){
        $query = 'INSERT INTO salariers(nom,prenom,fonction,salaire) VALUES(:nom, :prenom, :fonction, :salaire)';
        
        $nom = $_POST['nom'];
        $premom = $_POST['prenom'];
        $fonction = $_POST['fonction'];
        $salaire = $_POST['salaire'];
        
        Connexion::execute($query,[
            ':nom'=> $nom,
            ':prenom' => $premom,
            ':fonction' => $fonction,
            ':salaire' => $salaire,
        ]);
    }
    public static function supprimer(){
        $query = 'DELETE FROM salariers WHERE id=:idname';
        $id = $_POST['id'];
        Connexion::execute($query,[
            'idname'=> $id
        ]);
    }
    public static function Update(){

        $query = "UPDATE salariers SET nom=:nom ,prenom=:prenom ,fonction=:fonction ,salaire=:salaire WHERE id=:idname";
        
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $premom = $_POST['prenom'];
        $fonction = $_POST['fonction'];
        $salaire = $_POST['salaire'];
        
        Connexion::execute($query , [
            ':idname' => $id,
            ':nom'=> $nom,
            ':prenom' => $premom,
            ':fonction' => $fonction,
            ':salaire' => $salaire,
        ]);
    }

}
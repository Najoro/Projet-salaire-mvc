<?php

namespace App\Controler;

use App\Model\Salariers;
use Kernel\View;

use function PHPSTORM_META\type;

class SalarierControler{
    
    //simple requette
    public function ajout(){
        return new View(('Salariers/ajout.php'));
    }
    public function modifier(){
        $id =(int) $_GET['id'];
       if($id == 0){
            self::index();
       }else{
           $salariers =Salariers::particle($id);
           return new View('Salariers/modifier.php', [
               'id' => $salariers[0]['id'],
               'nom' => $salariers[0]['nom'],
               'prenom' => $salariers[0]['prenom'],
               'fonction' => $salariers[0]['fonction'],
               'salaire' => $salariers[0]['salaire'],
            ]);
        }
    }
    public function ConfirmeModification(){

        Salariers::Update();
        self::index();
    }
    //requette avec data
    public function index(){
        $salariers = Salariers::all();
        return new View('Salariers/index.php', ['salariers'=> $salariers]);
    }

    public function Envoyer()
    {
        Salariers::insert();
        self::index();

    }
    public function supprimer(){
        Salariers::supprimer();
        self::index();
    }
}
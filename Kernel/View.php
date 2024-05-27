<?php

namespace Kernel;

class View{
    private string $fileName;
    private $param = array();
    private $path = "../App/Views/";

    public function __construct($fileName , $param = NULL){
        $this->fileName = $fileName;
        $this->param = $param;

        //au moment de la construction on affiche
        $this->display();
    }

    public function getFileNAme(){
        return ($this->path . $this->fileName);
    }

    public function display(){

        foreach($this->param as $key => $value ){
            $$key = $value;
        }
        include($this->path . $this->fileName);
    }
}
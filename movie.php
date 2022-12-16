<?php
class Movie{

    public $titolo;
    public $annouscita;
    public $genere;

    function __construct( $_x, $_y, $_z){

        $this->titolo = $_x;
        $this->annouscita = $_y;
        $this->genere = $_z;

    }

    public function data(){
        if($this->annouscita < 2000){
            return "vecchiotto";

        }else{
            return "recente";
        }
    }

}

?>
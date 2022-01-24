<?php

    namespace Ejemplo\Poo\modelos;

    class ImagePost extends Post{

        public function __construct(private string $message, private string $image){
            print_r("Se creo un nuevo objecto ImagePost \n");
            parent::__construct($message);
        }


        public function getMessageImagePost(){
            return $this->saludo();
        }
    }
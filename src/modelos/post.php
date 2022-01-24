<?php

    namespace Ejemplo\Poo\modelos;

    use Ejemplo\Poo\utils\UUID;
    
    class Post{

        // Propiedades

        /* Alcance o ambito de las variables (public, private, protected)

            public -> Alcance global.
            private -> Alcance solo en la clase que se define.
            protected -> Alcance para en la clase que fue definida y clases heredadas.

        */

        private string $id;
        private array $likes;

        
        // Constructor : Son funciones que se ejecutan cuando un objecto se crea, puede inicializar propiedades.

        public function __construct(private string $message){

            print_r("Se creo un nuevo objecto Post \n");
        
            $this->id = UUID::generate();
           
        }


        protected function saludo(){
            return "Hola desde este post, con id $this->id";
        }

        // Getters and Setters

        public function getId(){
            return $this->id;
        }

        public function setId(string $id){
            $this->id = $id;
        }

        public function getMessage(){
        
            return $this->message;
        }
    }
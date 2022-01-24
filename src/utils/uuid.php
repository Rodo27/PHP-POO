<?php

    namespace Ejemplo\Poo\utils;

    class UUID{
        
        public static function generate(){
            return uniqid();
        }
    }
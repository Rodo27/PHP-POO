<?php 

    require 'vendor/autoload.php';
    
    Use Ejemplo\Poo\modelos\Post;
    Use Ejemplo\Poo\modelos\ImagePost;

    $myobjecto = new Post("Este es mi primer post");

    $postImagen = New ImagePost("Foto de mis vacaciones en la playa","playa.jpg");


    //$myobjecto = new Post("This is my first post");

    echo $myobjecto->getMessage();
    //echo $myobjecto->getId();

    echo $postImagen->getMessageImagePost();
    
    
    
    //echo $myobjecto2->getMessage();

    //echo $myobjecto->id;
    // echo $myobjecto->getId();
    // $myobjecto->setId("159");
    // echo $myobjecto->getId();

    //echo $myobjecto;

    /*
        Clase: Es un molde de cómo debe funcionar un objecto.
            Propiedades y Métodos

        Instancia u Objecto
            Usa las propiedades y los métodos definidos en la clase.            
    
    
        Ejemplo:            
            
            Clase User

            Propiedades:
                id,nombre, username, posts, followers.
            
            Métodos:
                publicar, seguirA.
    
    
            Clase Post 

            Propiedades:
                id, mensaje, likes.
            
            Métodos:
                addLike, addComment.

            
            Clase ImagePost 

            Propiedades:
                id, mensaje, imagen, likes.
            
            Métodos:
                addLike, addComment.


            Clase VideoPost 

            Propiedades:
                id, mensaje, video, likes.
            
            Métodos:
                addLike, addComment.
    
    
    
    */
<?php 

    namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// création de nos premières pages
    class TestController
    {
        public function index()
        {

        // le dd est un raccourcie de dump() et die() une alternative a var_dump 
            dd("ca fonctionne");
        }
        

        /**
         * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
         */
        // voici un raccourcis  dans le paramettre indiquant les meme chose que plus bas 
        public function test(Request $request, $age)
        {
            // pour analyser la requete http 
            // sans le mettre en parametre 
            
          //  $request = Request::createFromGlobals();
            
            // dump($request);
          
        //    la méthode 
           
            // $age = $request->attributes->get('age', 0);
            // tous nos controller dois retourner une réponse http c'est donc un objet de la classe response
            return new Response("Vous avez $age ans !");
           
        }

    }
<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home{

    /**
     * Método responsavel por retornar o (view) da nossa home
     * @return string Conteúdo HTML da página Home*/ 
    
    public static function getHome(){
        return View::render('home');
    }
}

?>
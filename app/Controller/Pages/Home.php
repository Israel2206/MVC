<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home extends Page{

    /**
     * Método responsavel por retornar o (view) da nossa home
     * @return string Conteúdo HTML da página Home*/ 
    
    public static function getHome(){
        //VIEW DA HOME
        $content = View::render('pages/home',[
            'name' => 'Israel - Informática',
            'description' => 'Gente boa demais'
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('Canal Legal - Israel', $content);
    }
}

?>
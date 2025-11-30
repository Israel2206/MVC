<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page{

    /**
     * Método responsavel por retornar o (view) da nossa home
     * @return string Conteúdo HTML da página Home*/ 
    
    public static function getHome(){
        $obOgarnization = new Organization;

        //VIEW DA HOME
        $content = View::render('pages/home',[
            'name' => $obOgarnization -> name,
            'description' => $obOgarnization -> description,
            'site' => $obOgarnization -> site,
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('Canal Legal - Israel', $content);
    }
}

?>
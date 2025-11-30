<?php

namespace App\Model\Entity;

class Organization{
    /**
     * ID da organização
     * @var integer
     */  
    public $id = 1;
    
    /**
     * nome da organização
     * @var string
     */ 
    public $name = 'Canal Legal';

    /**
     * site da organização
     * @var string
     */ 
    public $site = 'https://github.com/israel2206/MVC';

    /**
     * descrição da organização
     * @var string
     */
    public $description = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo veritatis cupiditate culpa quidem nam similique suscipit aspernatur, earum porro, tempore quae maxime, consectetur ipsam perferendis optio. Sed dolorum fugit ipsa?';
    

}

?>
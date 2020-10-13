<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class Routes
{
    use TraitUrlParser;
    private $rota;

    #Metodo de retorno da rota
    public function getRota()
    {
        $url = $this->parseUrl();
        $index = $url[0];

        $this->rota = array(
            "" => "HomeController",
            "home" => "HomeController",
            "sitemap" => "SitemapController",
            "contato"=> "ContatoController",
            "cadastro" => "CadastroController"
        );
        // var_dump($index);
        if(array_key_exists($index, $this->rota)){
            // var_dump(DIRREQ ."app/controller/{$this->rota[$index]}.php");
            if(file_exists(DIRREQ."app/Controller/{$this->rota[$index]}.php")){
                return $this->rota[$index];
            }else{
                return "Controller404";    
            }
        }else{
            return "Controller404";
        }

    }
}

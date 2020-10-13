<?php

namespace Src\Classes;

class Breadcrumb
{
    use \Src\Traits\TraitUrlParser;

    public function addBreadcrumb()
    {
        $cont = count($this->parseUrl());
        $arrayLink = [];
        $link = '';
        $arrayLink[] = "<a href=".DIRPAGE.">Home</a>";

        for($i = 0; $i < $cont; $i++){
            $link .= $this->parseUrl()[$i].'/';
            $arrayLink[] = "<a href=".DIRPAGE.$link.">".$this->parseUrl()[$i]."</a>";
        }
        echo implode(" > ",$arrayLink);
    }
}

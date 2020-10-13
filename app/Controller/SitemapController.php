<?php

namespace App\Controller;

use Src\Classes\Render;
use Src\Interfaces\InterfaceView;

class SitemapController  extends Render implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Pagina Inicial");   
        $this->setDescription('aqui vai a descricao do site');
        $this->setKeywords("estrutura mvc basica");
        $this->setDir("home/");
        $this->renderLayout();
    }
    public function index(){
        echo "chamou index";
    }
    public function testeMetodo($par1,$par2,$par3)
    {
        echo "O par1:{$par1} , o par2:{$par2}, o par3:{$par3}";   
    }
    public function teste2()
    {
        echo 'Esse metodo 2';   
    }

}

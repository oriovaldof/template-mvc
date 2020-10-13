<?php

namespace App\Controller;
use Src\Classes\Render;
use Src\Interfaces\InterfaceView;

class Controller404  extends Render implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Pagina Inicial");   
        $this->setDescription('aqui vai a descricao do site');
        $this->setKeywords("estrutura mvc basica");
        $this->setDir("404");
        $this->renderLayout();
    }
    public function index()
    {
       
    }
}

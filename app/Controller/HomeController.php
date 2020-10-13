<?php

namespace App\Controller;

use Src\Classes\Render;
use Src\Interfaces\InterfaceView;

class HomeController extends Render implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Pagina Inicial");   
        $this->setDescription('aqui vai a descricao do site');
        $this->setKeywords("estrutura mvc basica");
        $this->setDir("home");
        
    }
    public function index()
    {
        $this->renderLayout();
    }
}

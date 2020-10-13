<?php

namespace App\Controller;

use Src\Classes\Render;
use Src\Interfaces\InterfaceView;

class ContatoController extends Render implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Contato");   
        $this->setDescription('Façoa contato conosco');
        $this->setKeywords("telefone, email, whatsapp");
        $this->setDir("contato");
        $this->renderLayout();
    }
    public function index()
    {
       // echo 'Contato controller';   
    }
}

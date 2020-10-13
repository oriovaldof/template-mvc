<?php

namespace App\Controller;

use Src\Classes\InputPost;
use Src\Classes\Render;
use Src\Interfaces\InterfaceView;
use App\Model\CadastroModel;


class CadastroController extends Render implements InterfaceView
{
    private $input;
    private $model;

    public function __construct()
    {
        $this->setTitle("cadastro");
        $this->setDescription('Cadastro Cliente');
        $this->setKeywords("cadastro de cliente");
        $this->setDir("cadastro");
        $this->input = new InputPost();
        $this->model = new CadastroModel();
    }
    public function index()
    {
        $this->renderLayout();
    }

    public function cadastrar()
    {
        $this->model->cadastraCliente(
            $this->input->getData('nome'),
            $this->input->getData('sexo'),
            $this->input->getData('cidade')
        );

        $this->renderLayout();
    }

    public function pesquisa()
    {

        $rsData = $this->model->selectCliente(
            $this->input->getData('nome'),
            $this->input->getData('sexo'),
            $this->input->getData('cidade')
        );

        $this->renderLayout('pesquisa', [
            'rsData' => $rsData
        ]);
    }
    public function deletar()
    {
        $idArray = $_POST['id'];
        if (!empty($idArray)) {
            foreach ($idArray as $id) {
                $this->model->deletarCliente($id);
            }
        }
        echo 'true';
    }

    public function update()
    {
        echo json_encode([
            'teste' => 'ok',
            'id' => $this->input->getData('id')
        ]);
    }
}

<?php

namespace App;

use Src\Classes\Routes;

class Dispatch extends Routes
{
    //atributos
    private $method;
    private $param = [];
    private $obj;

    //Metodo Construtot
    public function __construct()
    {
        self::addController();
    }

    //Metodo de adicao controller
    private  function addController()
    {
        $rotaController = $this->getRota();
        $nameSpace = "App\\Controller\\{$rotaController}";
        $this->obj = new $nameSpace;

        // if (!empty($this->parseUrl()[1])) {
        //     self::addMethod();
        // }
        self::addMethod();
    }

    //Metodo adiçao de metodo controller
    private function addMethod()
    {
        if (!empty($this->parseUrl()[1])) {
            if (method_exists($this->obj, $this->parseUrl()[1])) {
                $this->setMethod("{$this->parseUrl()[1]}");
                self::addParam();
                call_user_func_array([$this->obj, $this->getMethod()], $this->getParam());
            }
        } else {
            $this->setMethod("index");
            call_user_func_array([$this->obj,$this->getMethod()],$this->getParam());
        }
    }

    //metodo adicao parametros controller
    private function addParam()
    {
        $contArray = count($this->parseUrl());
        if($contArray > 2){
            foreach ($this->parseUrl() as $key => $value) {
               if($key > 1){
                   $this->setParam($this->param += [$key => $value]);
               }
            }
        }
    }

    /**
     * Get the value of method
     */
    protected function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the value of param
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set the value of param
     *
     * @return  self
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }
}

<?php

namespace Src\Classes;

class InputPost
{

    private $data = [];

    public function __construct()
    {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $this->setData(
                        $key, 
                        filter_input(INPUT_POST,$key,FILTER_SANITIZE_SPECIAL_CHARS)    
                    );
            }
        }
    }


    /**
     * Get the value of data
     */
    public function getData($key)
    {
        return (!empty($this->data[$key]))?$this->data[$key]:'';
    }

    /**
     * Set the value of data
     *
     * @return  self
     */
    public function setData($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }
}

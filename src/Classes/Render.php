<?php

namespace Src\Classes;

class Render
{
    /**Atributos */
    private $dir;
    private $title;
    private $description;
    private $keywords;
    private $view;
    private $param = [];

    /**
     * Responsavel por renderizar todos os layout
     * @return void
     */
    public function renderLayout($view = null, $param = array())
    {

        if (!empty($param)) {
            $this->setParam($param);
        }
        if (!empty($view)) {
            $this->setView($view);
        }

        include_once(DIRREQ . "app/view/template/Layout.php");
    }

    /**
     * adiciona caracteristicas especificas head
     * @return void
     */
    public function addHead()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/head.php")) {
            include(DIRREQ . "app/view/{$this->getDir()}/head.php");
        }
    }

    /**
     * adiciona caracteristicas especificas header
     * @return void
     */
    public function addHeader()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/header.php")) {
            include(DIRREQ . "app/view/{$this->getDir()}/header.php");
        }
    }

    /**
     * adiciona caracteristicas especificas main
     * @return void
     */
    public function addMain()
    {
        if (!empty($this->getParam())) {
            //extract variable
            extract($this->getParam());
        }

        //Se existir view especifica chamada ela, senão chama view padrao
        if (!empty($this->getView())) {

            if (file_exists(DIRREQ . "app/view/{$this->getDir()}/{$this->getView()}.php")) {
                include(DIRREQ . "app/view/{$this->getDir()}/{$this->getView()}.php");
            }
        } else {
            if (file_exists(DIRREQ . "app/view/{$this->getDir()}/main.php")) {
                include(DIRREQ . "app/view/{$this->getDir()}/main.php");
            }
        }
    }

    /**
     * adiciona caracteristicas especificas footer
     * @return void
     */
    public function addFooter()
    {
        if (file_exists(DIRREQ . "app/view/{$this->getDir()}/footer.php")) {
            include(DIRREQ . "app/view/{$this->getDir()}/footer.php");
        }
    }

    /**
     * Get the value of dir
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set the value of dir
     *
     * @return  self
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of keywords
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set the value of keywords
     *
     * @return  self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get the value of newView
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set the value of newView
     *
     * @return  self
     */
    public function setView($view)
    {
        $this->view = (substr($view, -4) == ".php") ? rtrim(str_replace(".php", "", $view)) : $view;

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

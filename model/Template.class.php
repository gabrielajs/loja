<?php

/** Configurando o template do smarty */

class Template extends SmartyBC
{
    function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('view/'); //diretorio de once esta os tpl
        $this->setCompileDir('view/compile'); //tudo que for compile sera salva nesta pasta
        $this->setCacheDir('view/cache'); //tudo quee for cache sera salva nesta pasta
    }
}

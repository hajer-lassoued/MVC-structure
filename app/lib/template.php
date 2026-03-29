<?php

namespace MVC\LIB;

class Template 
{

    private $_templatepart;
    private $_action_view;

    public function __construct(array $parts = [])
    {
        $this->_templatepart = $parts;
    }

    public function setActionViewFiles($actionViewPath){
        $this->_action_view = $actionViewPath;
    }

}
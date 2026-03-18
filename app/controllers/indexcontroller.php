<?php

namespace MVC\CONTROLLERS;

class IndexController extends AbstractController
{
    public function defaultAction () {
        $this->_views();
    }

    public function addAction () {
        $this->_views();
    }
}
<?php

namespace MVC\LIB;

trait InputFilter 
{
    public function filterInt($input) 
    {
        return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    }

    public function filterFloat($input) 
    {
        return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    public function filterString($input) 
    {
        return htmlentities(strip_tags($input), ENT_QUOTES, "UTF-8");
        // htmlentities() is a PHP function that converts special characters into HTML-safe characters (the reverse method is html_entity_decode)
        // strip_tags() removes HTML and PHP tags from a string
        // ENT_QUOTES tells PHP to convert both double and single quotes into HTML entities when encoding.

    } 
}
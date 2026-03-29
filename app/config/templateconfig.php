<?php 

return [
    "template" => [
        "wrapper_start"     =>  TEMPLATE_PATH . "wrapperstart.php",
        "header"            =>  TEMPLATE_PATH . "header.php",
        "nav"               =>  TEMPLATE_PATH . "nav.php",
        ":view"             =>  ":action_view",
        "wrapper_end"       =>  TEMPLATE_PATH . "wrapperend.php"
    ],
    "header_ressources" => [
        "CSS" => [
            "normalize"         =>  CSS . "normalize.css",
            "fawsome"           =>  CSS . "fawsome.min.css",
            "gicons"            =>  CSS . "googleicons.css",
            "main"              =>  CSS . "main.css"
        ],
        "js" => [
            "normalizr"         =>  JS . "vendor/modernizr-2.8.3.min.js",
            "fawsome"           =>  JS . "fawsome.min.css",
            "gicons"            =>  JS . "googleicons.css",
            "main"              =>  JS . "main.css"
        ]
    ],
    "header_ressources" => [
            "jquery"            =>  JS . "vendor/modernizr-2.8.3.min.js",
            "helper"            =>  JS . "helper.js",
            "main"              =>  JS . "main.js",
    ]
];
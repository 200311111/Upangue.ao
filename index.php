<?php

    // error_reporting(E_ALL);
    ini_set("display_errors", 0); // 1

    // app: fortunaWork | version: 2.0
    // sytem: upangue | version 0.0 
    
    require_once "libs/database.php";
    require_once "libs/controller.php";
    require_once "libs/catphrase.php";
    require_once "libs/dataMonthName.php";
    require_once "libs/formatNum.php";
    require_once "libs/slug.php";
    require_once "libs/model.php";
    require_once "libs/view.php";
    require_once "libs/app.php";

    require_once "config/config.php";

    // session_start
    session_start();
    
    function session_go() {
        if(empty($_SESSION['token'])) 
        {header("Location: ". constant('URL') ."/entrar");} 
        else {return true;}
    }
    
    function empresa_go() {
        if(empty($_SESSION['token'])) 
        {header("Location: ". constant('URL') ."/acesso");} 
        else {return true;}
    }
    
    function candidato_go() {
        if(empty($_SESSION['token'])) 
        {header("Location: ". constant('URL') ."/acessar");} 
        else {return true;}
    }

    // session_destroy
    function session_out() {
        session_start();
        session_unset();
        session_destroy();
    }

    $app = new App();

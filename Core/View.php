<?php

/**
 * Created by PhpStorm.
 * User: joro
 * Date: 6/17/17
 * Time: 12:02 AM
 */
namespace Core;
class View
{
    const VIEWS_FOLDER="Views";
    const VIEWS_EXTENTION=".php";

    public function render($viewName=null,$model=null){


        include self::VIEWS_FOLDER.DIRECTORY_SEPARATOR.$viewName.self::VIEWS_EXTENTION;
    }
}
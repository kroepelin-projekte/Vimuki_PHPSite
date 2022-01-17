<?php

namespace vimuki\Views\Game;

use vimuki\Footer\FooterIndex;
use vimuki\Header\HeaderIndex;

/**
 * Class ViewIndex
 * @package vimuki\Views\Home
 */
class ViewIndex
{
    public static function getContent()
    {
        require_once __DIR__ . "/index.php";
    }
}
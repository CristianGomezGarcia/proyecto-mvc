<?php
class View
{
    function __construct()
    {
        //echo "<h1>Vista Base</h1>";
    }

    function render($nombre)
    {
        require("View/" . $nombre . ".php");
    }
}

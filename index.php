<?php
require_once("libs/database.php");
require_once("libs/Controller.php");
require_once("libs/View.php");
require_once("libs/Model.php");
require_once("libs/app.php");
require_once("Config/config.php");

class Index
{
    public function __construct()
    {
        $this->_main();
    }

    private function _main()
    {
        $app = new App();
    }
}
new Index();

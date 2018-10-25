<?php
/**
 * Created by PhpStorm.
 * User: sanyochok
 * Date: 25.10.2018
 * Time: 14:23
 */

namespace App\models;


class Route
{
    private $_uri;

    public function getUri()
    {
        return $this->_uri;
    }

    public function __construct()
    {
        $this->_uri = urldecode(trim($_SERVER['REQUEST_URI']));
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: sanyochok
 * Date: 25.10.2018
 * Time: 13:10
 */

namespace App\models;


class Request
{
    public function getMethod()
    {
        return mb_strtoupper($_SERVER['REQUEST_METHOD'], 'UTF-8');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: sanyochok
 * Date: 25.10.2018
 * Time: 13:17
 */

namespace App\models;


class PhpInput
{
    private $_content;

    public function __construct($input = 'php://input')
    {
        $this->_content = $input;
    }


    public function getPhpInputContent()
    {
        return file_get_contents($this->_content);
    }
}
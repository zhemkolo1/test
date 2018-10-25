<?php
chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';       
(new \App\Application('must be url for redirect'))->send();

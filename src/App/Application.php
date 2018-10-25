<?php

namespace App;


use App\models\PhpInput;
use App\models\Request;
use App\models\Route;

class Application
{
    const REQUEST_METHOD = 'POST';


    private $_url;
    private $_guzzle;
    private $_content;
    private $_request;
    private $_route;

    public function __construct($url)
    {
        $this->_guzzle = new \GuzzleHttp\Client(['base_uri' => $url]);
        $this->_url = $url;
        $this->_content = (new PhpInput())->getPhpInputContent();
        $this->_request = new Request();
        $this->_route = new Route();
    }


    public function send()
    {
        
        $this->isValidJson()
            ->isValidRequest()
            ->_guzzle
            ->request(
                self::REQUEST_METHOD,
                $this->_route->getUri(), [
                'json' => json_decode($this->_content, true)
            ]);
    }
    
    protected function isValidJson()
    {
        if (json_decode($this->_content, true)){
            return $this;
        } else {
            throw new \Exception('Invalid json', 400);
        }
    }

    protected function isValidRequest()
    {
        if ($this->_request->getMethod() == 'POST'){
            return $this;
        } else {
            throw new \Exception('Invalid request method', 400);
        }
    }



}
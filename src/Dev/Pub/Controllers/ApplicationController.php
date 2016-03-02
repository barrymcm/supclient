<?php

namespace Dev\Pub\Controllers;

use GuzzleHttp\Client;
use Dev\Pub\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicationController
{
    /**
     * [get description]
     * @param  [type] $params [description]
     * @return [type]         [description]
     */
    protected function get($params = null)
    {
    	$client = new Client();
    	$app = new Application();
    	
    	$request = $client->createRequest('GET', $app['endpoint.3000'].'/'.$params);
    	$response = $client->send($request);

    	return $response->json();
    }

    /**
     * [post description]
     * @param  [type] $params [description]
     * @return [type]         [description]
     */
    protected function post(array $body) 
    {
    	$client = new Client();
    	$app = new Application();

    	$r = $client->createRequest('POST', $app['endpoint.3000'], [$body]);
    	return $r;
    }
}

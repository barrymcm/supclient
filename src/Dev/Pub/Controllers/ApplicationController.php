<?php

namespace Dev\Pub\Controllers;

use GuzzleHttp\Client;
use Dev\Pub\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApplicationController
{
    protected function get($params)
    {
    	$client = new Client();
    	$app = new Application();
    	$request = $client->createRequest('GET', $app['endpoint.3000'].$params);
    	$response = $client->send($request);

    	return $response;
    }
}

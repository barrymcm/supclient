<?php

namespace Dev\Pub\Controllers;

use GuzzleHttp\Client;
use Dev\Pub\Application;
use GuzzleHttp\Exception\RequestException;
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
    	$app = new Application();
    	
    	$client = new Client();
    	$request = $client->createRequest('GET', $app['endpoint.3000'].'/'.$params);
    	$response = $client->send($request);

    	return $response->json();
    }

    /**
     * [post description]
     * @param  [type] $params [description]
     * @return [type]         [description]
     */
    protected function post($params = null, $body = null) 
    {
    	$app = new Application();

    	/**
    	 * @todo abstract the client object into a container
    	 * @var Client
    	 */
    	$client = new Client();
		
		try {
    		$response = $client->request("POST", $app['endpoint.3000'].'/'.$params, ["body" => $body]);
    		
    		// this could go into a test
	    	$response->getStatusCode();
	    	$response->hasHeader("Location");
	    	$response->getbody(true);
	    	return $response;
    	} catch (RequestException $e) {
    		echo $e->getRequest();
    		if ($e->hasResponse()) {
        		echo $e->getResponse();
    		}
		}   	
    }
}

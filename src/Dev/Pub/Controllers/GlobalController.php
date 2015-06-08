<?php

namespace Dev\Pub\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalController
{
    public function indexAction(Request $request)
    {
        return "response from the index action";
    }
}

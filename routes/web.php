<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('payment', new Route(constant("URL_SUBFOLDER") . '/{params}', array('controller' => 'PaymentController', 'method' => 'index'), ["params" => '(.*)'], [], null, [], ['GET', 'HEAD']));

<?php
if(!defined('APP')) die('Unavailable this file');
require 'vendor/autoload.php';

$registry = new \Engine\Registry();
$config = new \Engine\Config();

$config->load('default');
$config->load($app_config);
$registry->set('config', $config);

$event = new \Engine\Event($registry);
$registry->set('event', $event);

if ($config->has('action_event')) {
    foreach ($config->get('action_event') as $key => $value) {
        foreach ($value as $priority => $action) {
            $event->register($key, new \Engine\Action($action), $priority);
        }
    }
}

$loader = new \Engine\Loader($registry);
$registry->set('load', $loader);

$registry->set('request', new \Library\Request());

//Response
$response = new \Library\Response();
$response->addHeader('Content-Type: text/html; charset=utf-8');
$response->setCompression(0);
$registry->set('response', $response);

$registry->set('url', new \Library\Url($config->get('site_url')));

// Document
$registry->set('document', new \Library\Document());

$route = new \Engine\Router($registry);

if ($config->has('action_pre_action')) {
    foreach ($config->get('action_pre_action') as $value) {
        $route->addPreAction(new \Engine\Action($value));
    }
}

$route->dispatch(new \Engine\Action($config->get('action_router')), new \Engine\Action($config->get('action_error')));

$response->output();
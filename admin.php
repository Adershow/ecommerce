<?php 
require_once("vendor/autoload.php");
$app = new \Slim\Slim();
use  Hcode\PageAdmin;

$app->config('debug', true);

$app->get('/', function() {
    

	$page = new PageAdmin();
	$page->setTpl("index");

});


$app->run();
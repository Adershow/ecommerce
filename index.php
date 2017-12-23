<?php 

require_once("vendor/autoload.php");
$app = new \Slim\Slim();
use  Hcode\Page;
use  Hcode\PageAdmin;
$app->config('debug', true);

$app->get('/site', function() {
    

	$page = new Page();
	$page->setTpl("index");

});

$app->get('/admin', function() {
    

	$page = new PageAdmin();
	$page->setTpl("index");

});


$app->run();

 ?>
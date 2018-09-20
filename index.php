<?php 

require_once("vendor/autoload.php");
use \Hcode\DB\Sql;
use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);

});

$app->run();

 ?>
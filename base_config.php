<?php
/**
 * Requires:
 * - PHP MongoDB Extension (https://php.net/manual/en/set.mongodb.php)
 * - MongoDB Library (`composer require mongodb/mongodb`)
 */
global $_args,$trebsqy;


require 'vendor/autoload.php';
require_once  './arguments.php';

$_args=new trebsqyArgs();

use MongoDB\Client;
use MongoDB\Collection;
$client = new Client('mongodb://localhost:27017');
$client_live = new Client('mongodb://35.182.149.95/sqyca');
//$trebdirect=$client_live->treb->trebdirect;
//$trebsqy=$client_live->treb->trebsqy;
$trebdirect = $client->ca->treb_comm;
$trebsqy = $client->ca->trebsqy;


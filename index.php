<?php

require_once '../Grasp/vendor/autoload.php';
require_once 'vendor/autoload.php';

$client = new BrianFaust\AdBeat\Client('445bb4f54fb8fd4edb6a317c37b696b4');

$response = $client->api('Ad')->metrics();
dd($response);

<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once '../Grasp/vendor/autoload.php';
require_once 'vendor/autoload.php';

$client = new BrianFaust\AdBeat\Client('445bb4f54fb8fd4edb6a317c37b696b4');

$response = $client->api('Ad')->metrics();
dd($response);

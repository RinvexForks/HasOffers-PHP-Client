<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Authentication extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Authentication';

    public function findUserByCredentials($parameters = [])
    {
        return $this->get('findUserByCredentials', $parameters);
    }

    public function findUserByToken($parameters = [])
    {
        return $this->get('findUserByToken', $parameters);
    }
}

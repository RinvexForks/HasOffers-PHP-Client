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

class TinyUrl extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'TinyUrl';

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function updateRedirect($parameters = [])
    {
        return $this->get('updateRedirect', $parameters);
    }
}

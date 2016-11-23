<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\YeahMobi;

use BrianFaust\HasOffers\Base;

class Offers extends Base
{
    protected $endpointType = 'YeahMobi';

    protected $endpointName = 'Offers';

    public function findAll($parameters = [])
    {
        return $this->get('offers/offers', $parameters);
    }
}

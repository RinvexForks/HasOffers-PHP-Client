<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class RingRevenue extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'RingRevenue';

    public function createAffiliateLoginUrl($parameters = [])
    {
        return $this->get('createAffiliateLoginUrl', $parameters);
    }
}

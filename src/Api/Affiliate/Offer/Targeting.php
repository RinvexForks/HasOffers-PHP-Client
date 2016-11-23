<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Affiliate\Offer;

use BrianFaust\HasOffers\Base;

class Targeting extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'OfferTargeting';

    public function getRuleTargetingForOffer($parameters = [])
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }
}

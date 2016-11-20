<?php

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

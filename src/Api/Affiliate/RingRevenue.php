<?php

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

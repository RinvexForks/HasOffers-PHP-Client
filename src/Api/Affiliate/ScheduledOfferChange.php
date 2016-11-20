<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class ScheduledOfferChange extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'ScheduledOfferChange';

    public function findSchedules($parameters = [])
    {
        return $this->get('findSchedules', $parameters);
    }
}

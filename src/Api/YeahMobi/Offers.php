<?php

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

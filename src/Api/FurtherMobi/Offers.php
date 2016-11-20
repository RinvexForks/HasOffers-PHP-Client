<?php

namespace BrianFaust\HasOffers\Api\FurtherMobi;

use BrianFaust\HasOffers\Base;

class Offers extends Base
{
    protected $endpointType = 'FurtherMobi';

    protected $endpointName = 'Offers';

    public function findAll($parameters = [])
    {
        return $this->get('offers/offers', $parameters);
    }
}

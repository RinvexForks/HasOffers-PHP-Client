<?php

namespace BrianFaust\HasOffers\Api\Affiliate\Offer;

use BrianFaust\HasOffers\Base;

class Url extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'OfferUrl';

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }
}

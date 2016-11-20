<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class RingRevenue extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'RingRevenue';

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }
}

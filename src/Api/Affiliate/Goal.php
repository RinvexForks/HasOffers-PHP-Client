<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class Goal extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Goal';

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }
}

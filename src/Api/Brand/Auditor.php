<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Auditor extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Auditor';

    public function findBrandDataAudits($parameters = [])
    {
        return $this->get('findBrandDataAudits', $parameters);
    }
}

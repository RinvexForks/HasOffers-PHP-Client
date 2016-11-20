<?php

namespace BrianFaust\HasOffers\Api\Brand\Custom;

use BrianFaust\HasOffers\Base;

class Page extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'CustomPage';

    public function find($parameters = [])
    {
        return $this->get('find', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }
}

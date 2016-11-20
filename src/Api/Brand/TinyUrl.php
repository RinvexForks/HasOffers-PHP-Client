<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class TinyUrl extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'TinyUrl';

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function updateRedirect($parameters = [])
    {
        return $this->get('updateRedirect', $parameters);
    }
}

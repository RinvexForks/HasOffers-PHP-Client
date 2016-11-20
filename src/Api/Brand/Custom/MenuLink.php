<?php

namespace BrianFaust\HasOffers\Api\Brand\Custom;

use BrianFaust\HasOffers\Base;

class MenuLink extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'CustomMenuLink';

    public function find($parameters = [])
    {
        return $this->get('find', $parameters);
    }

    public function findActive($parameters = [])
    {
        return $this->get('findActive', $parameters);
    }
}

<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Environment extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Environment';

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findByName($parameters = [])
    {
        return $this->get('findByName', $parameters);
    }

    public function getValue($parameters = [])
    {
        return $this->get('getValue', $parameters);
    }

    public function isEnabled($parameters = [])
    {
        return $this->get('isEnabled', $parameters);
    }

    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }
}

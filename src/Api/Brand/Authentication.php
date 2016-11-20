<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Authentication extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Authentication';

    public function findUserByCredentials($parameters = [])
    {
        return $this->get('findUserByCredentials', $parameters);
    }

    public function findUserByToken($parameters = [])
    {
        return $this->get('findUserByToken', $parameters);
    }
}

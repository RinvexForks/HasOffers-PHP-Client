<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class ApiKey extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'ApiKey';

    public function generateApiKey($parameters = [])
    {
        return $this->get('generateApiKey', $parameters);
    }

    public function getUserApiKey($parameters = [])
    {
        return $this->get('getUserApiKey', $parameters);
    }

    public function regenerateApiKey($parameters = [])
    {
        return $this->get('regenerateApiKey', $parameters);
    }
}

<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class ApiKey extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'ApiKey';

    public function findApiKeys($parameters = [])
    {
        return $this->get('findApiKeys', $parameters);
    }

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

    public function updateApiKeyStatus($parameters = [])
    {
        return $this->get('updateApiKeyStatus', $parameters);
    }
}

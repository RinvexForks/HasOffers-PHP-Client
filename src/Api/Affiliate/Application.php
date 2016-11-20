<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class Application extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Application';

    public function findAllCountries($parameters = [])
    {
        return $this->get('findAllCountries', $parameters);
    }

    public function findAllHostnames($parameters = [])
    {
        return $this->get('findAllHostnames', $parameters);
    }

    public function findAllOfferCategories($parameters = [])
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    public function findAllTimezones($parameters = [])
    {
        return $this->get('findAllTimezones', $parameters);
    }
}

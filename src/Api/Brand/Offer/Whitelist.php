<?php

namespace BrianFaust\HasOffers\Api\Brand\Offer;

use BrianFaust\HasOffers\Base;

class Whitelist extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'OfferWhitelist';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}

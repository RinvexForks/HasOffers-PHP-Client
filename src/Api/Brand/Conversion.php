<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Conversion extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Conversion';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findAddedConversions($parameters = [])
    {
        return $this->get('findAddedConversions', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function findUpdatedConversions($parameters = [])
    {
        return $this->get('findUpdatedConversions', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }

    public function updateMeta($parameters = [])
    {
        return $this->get('updateMeta', $parameters);
    }

    public function updateStatus($parameters = [])
    {
        return $this->get('updateStatus', $parameters);
    }
}

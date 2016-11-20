<?php

namespace BrianFaust\HasOffers\Api\Affiliate\Offer;

use BrianFaust\HasOffers\Base;

class File extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'OfferFile';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function getCreativeCode($parameters = [])
    {
        return $this->get('getCreativeCode', $parameters);
    }
}

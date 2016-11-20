<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class ScheduledOfferChange extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'ScheduledOfferChange';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findScheduleById($parameters = [])
    {
        return $this->get('findScheduleById', $parameters);
    }

    public function findSchedules($parameters = [])
    {
        return $this->get('findSchedules', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}

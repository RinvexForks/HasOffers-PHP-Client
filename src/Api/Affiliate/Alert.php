<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class Alert extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Alert';

    public function dismissAffiliateUserAlert($parameters = [])
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function getAffiliateUserAlerts($parameters = [])
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }
}

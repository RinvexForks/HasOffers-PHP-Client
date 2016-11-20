<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Notification extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Notification';

    public function clearUserSubscriptions($parameters = [])
    {
        return $this->get('clearUserSubscriptions', $parameters);
    }

    public function getUserSubscriptions($parameters = [])
    {
        return $this->get('getUserSubscriptions', $parameters);
    }

    public function replaceUserSubscriptions($parameters = [])
    {
        return $this->get('replaceUserSubscriptions', $parameters);
    }
}

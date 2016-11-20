<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class UserPreferences extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'UserPreferences';

    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }
}

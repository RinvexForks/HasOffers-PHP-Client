<?php

namespace BrianFaust\HasOffers\Api\Affiliate\Brand;

use BrianFaust\HasOffers\Base;

class Information extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'BrandInformation';

    public function getBrandInformation($parameters = [])
    {
        return $this->get('getBrandInformation', $parameters);
    }
}

<?php

namespace BrianFaust\HasOffers\Api\Affiliate\Brand;

use BrianFaust\HasOffers\Base;

class Design extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'BrandDesign';

    public function getTermsAndConditions($parameters = [])
    {
        return $this->get('getTermsAndConditions', $parameters);
    }
}

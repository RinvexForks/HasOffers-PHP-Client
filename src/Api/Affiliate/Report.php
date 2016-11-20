<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class Report extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Report';

    public function getAffiliateCommissions($parameters = [])
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    public function getAffiliateReferrals($parameters = [])
    {
        return $this->get('getAffiliateReferrals', $parameters);
    }

    public function getConversions($parameters = [])
    {
        return $this->get('getConversions', $parameters);
    }

    public function getStats($parameters = [])
    {
        return $this->get('getStats', $parameters);
    }
}

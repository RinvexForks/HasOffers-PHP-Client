<?php

namespace BrianFaust\HasOffers\Api\YeahMobi;

use BrianFaust\HasOffers\Base;

class Stats extends Base
{
    protected $endpointType = 'YeahMobi';

    protected $endpointName = 'Stats';

    public function getStatsReport($parameters = [])
    {
        return $this->get('stats/stats', $parameters);
    }

    public function getConversionReport($parameters = [])
    {
        return $this->get('stats/lead_report', $parameters);
    }
}

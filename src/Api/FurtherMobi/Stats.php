<?php

namespace BrianFaust\HasOffers\Api\FurtherMobi;

use BrianFaust\HasOffers\Base;

class Stats extends Base
{
    protected $endpointType = 'FurtherMobi';

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

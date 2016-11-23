<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

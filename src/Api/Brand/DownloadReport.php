<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class DownloadReport extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'DownloadReport';

    public function getDownloadReportLink($parameters = [])
    {
        return $this->get('getDownloadReportLink', $parameters);
    }
}

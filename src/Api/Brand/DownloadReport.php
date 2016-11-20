<?php

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

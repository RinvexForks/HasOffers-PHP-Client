<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class RawLog extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'RawLog';

    public function getDownloadLink($parameters = [])
    {
        return $this->get('getDownloadLink', $parameters);
    }

    public function getLogExpirations($parameters = [])
    {
        return $this->get('getLogExpirations', $parameters);
    }

    public function listDateDirs($parameters = [])
    {
        return $this->get('listDateDirs', $parameters);
    }

    public function listLogs($parameters = [])
    {
        return $this->get('listLogs', $parameters);
    }
}

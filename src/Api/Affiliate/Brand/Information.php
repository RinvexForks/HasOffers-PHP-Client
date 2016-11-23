<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

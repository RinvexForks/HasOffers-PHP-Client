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

class Design extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'BrandDesign';

    public function getTermsAndConditions($parameters = [])
    {
        return $this->get('getTermsAndConditions', $parameters);
    }
}

<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class UserPreferences extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'UserPreferences';

    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }
}

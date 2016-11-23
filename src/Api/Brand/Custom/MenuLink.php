<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand\Custom;

use BrianFaust\HasOffers\Base;

class MenuLink extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'CustomMenuLink';

    public function find($parameters = [])
    {
        return $this->get('find', $parameters);
    }

    public function findActive($parameters = [])
    {
        return $this->get('findActive', $parameters);
    }
}

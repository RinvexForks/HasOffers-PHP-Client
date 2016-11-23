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

class Notification extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Notification';

    public function clearUserSubscriptions($parameters = [])
    {
        return $this->get('clearUserSubscriptions', $parameters);
    }

    public function getUserSubscriptions($parameters = [])
    {
        return $this->get('getUserSubscriptions', $parameters);
    }

    public function replaceUserSubscriptions($parameters = [])
    {
        return $this->get('replaceUserSubscriptions', $parameters);
    }
}

<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Affiliate\Affiliate;

use BrianFaust\HasOffers\Base;

class User extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'AffiliateUser';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function getContext($parameters = [])
    {
        return $this->get('getContext', $parameters);
    }

    public function setPermissions($parameters = [])
    {
        return $this->get('setPermissions', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}

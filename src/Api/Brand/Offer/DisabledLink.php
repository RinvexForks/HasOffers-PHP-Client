<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand\Offer;

use BrianFaust\HasOffers\Base;

class DisabledLink extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'OfferDisabledLink';

    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function save($parameters = [])
    {
        return $this->get('save', $parameters);
    }
}

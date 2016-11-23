<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Conversion;

use BrianFaust\HasOffers\Base;

class Meta extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'ConversionMeta';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}

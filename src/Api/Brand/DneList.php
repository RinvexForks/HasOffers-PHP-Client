<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class DneList extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'DneList';

    public function addEmail($parameters = [])
    {
        return $this->get('addEmail', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
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

    public function findByOfferId($parameters = [])
    {
        return $this->get('findByOfferId', $parameters);
    }

    public function getEmailListCsv($parameters = [])
    {
        return $this->get('getEmailListCsv', $parameters);
    }

    public function moveDneList($parameters = [])
    {
        return $this->get('moveDneList', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function upload($parameters = [])
    {
        return $this->get('upload', $parameters);
    }
}

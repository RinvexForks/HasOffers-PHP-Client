<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand\Affiliate;

use BrianFaust\HasOffers\Base;

class User extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'AffiliateUser';

    public function checkPassword($parameters = [])
    {
        return $this->get('checkPassword', $parameters);
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

    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAffiliateId($parameters = [])
    {
        return $this->get('findAllIdsByAffiliateId', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function grantAccess($parameters = [])
    {
        return $this->get('grantAccess', $parameters);
    }

    public function removeAccess($parameters = [])
    {
        return $this->get('removeAccess', $parameters);
    }

    public function resetPassword($parameters = [])
    {
        return $this->get('resetPassword', $parameters);
    }

    public function uniqueEmail($parameters = [])
    {
        return $this->get('uniqueEmail', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}

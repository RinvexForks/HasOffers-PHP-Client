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

class Employee extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Employee';

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

    public function findAllAdvertiserManagers($parameters = [])
    {
        return $this->get('findAllAdvertiserManagers', $parameters);
    }

    public function findAllAffiliateManagers($parameters = [])
    {
        return $this->get('findAllAffiliateManagers', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllByPermission($parameters = [])
    {
        return $this->get('findAllByPermission', $parameters);
    }

    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByPermission($parameters = [])
    {
        return $this->get('findAllIdsByPermission', $parameters);
    }

    public function findBrandOwnerInformation($parameters = [])
    {
        return $this->get('findBrandOwnerInformation', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function getCommission($parameters = [])
    {
        return $this->get('getCommission', $parameters);
    }

    public function getHOMessage($parameters = [])
    {
        return $this->get('getHOMessage', $parameters);
    }

    public function grantAccess($parameters = [])
    {
        return $this->get('grantAccess', $parameters);
    }

    public function removeAccess($parameters = [])
    {
        return $this->get('removeAccess', $parameters);
    }

    /**
     * Removes the custom Employee Commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomCommission($parameters = [])
    {
        return $this->get('removeCustomCommission', $parameters);
    }

    public function resetPassword($parameters = [])
    {
        return $this->get('resetPassword', $parameters);
    }

    /**
     * Set a custom commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomCommission($parameters = [])
    {
        return $this->get('setCustomCommission', $parameters);
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

<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Alert extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Alert';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function createAffiliateUserAlert($parameters = [])
    {
        return $this->get('createAffiliateUserAlert', $parameters);
    }

    public function createEmployeeAlert($parameters = [])
    {
        return $this->get('createEmployeeAlert', $parameters);
    }

    public function dismissAffiliateUserAlert($parameters = [])
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    public function dismissAllAffiliateUserAlerts($parameters = [])
    {
        return $this->get('dismissAllAffiliateUserAlerts', $parameters);
    }

    public function dismissAllEmployeeAlerts($parameters = [])
    {
        return $this->get('dismissAllEmployeeAlerts', $parameters);
    }

    public function dismissEmployeeAlert($parameters = [])
    {
        return $this->get('dismissEmployeeAlert', $parameters);
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

    public function getAffiliateUserAlerts($parameters = [])
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }

    public function getEmployeeAlerts($parameters = [])
    {
        return $this->get('getEmployeeAlerts', $parameters);
    }

    public function sendToAffiliateUsers($parameters = [])
    {
        return $this->get('sendToAffiliateUsers', $parameters);
    }

    public function sendToEmployees($parameters = [])
    {
        return $this->get('sendToEmployees', $parameters);
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

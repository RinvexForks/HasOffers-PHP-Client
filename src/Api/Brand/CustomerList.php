<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class CustomerList extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'CustomerList';

    public function addCustomerAttribute($parameters = [])
    {
        return $this->get('addCustomerAttribute', $parameters);
    }

    public function addListAttribute($parameters = [])
    {
        return $this->get('addListAttribute', $parameters);
    }

    public function createList($parameters = [])
    {
        return $this->get('createList', $parameters);
    }

    public function findAllCustomers($parameters = [])
    {
        return $this->get('findAllCustomers', $parameters);
    }

    public function findAllLists($parameters = [])
    {
        return $this->get('findAllLists', $parameters);
    }

    public function findAllListsByIds($parameters = [])
    {
        return $this->get('findAllListsByIds', $parameters);
    }

    public function findAllSubscriptions($parameters = [])
    {
        return $this->get('findAllSubscriptions', $parameters);
    }

    public function findCustomerById($parameters = [])
    {
        return $this->get('findCustomerById', $parameters);
    }

    public function findListById($parameters = [])
    {
        return $this->get('findListById', $parameters);
    }

    public function findSubscriptionById($parameters = [])
    {
        return $this->get('findSubscriptionById', $parameters);
    }

    public function getListAttributes($parameters = [])
    {
        return $this->get('getListAttributes', $parameters);
    }

    public function removeCustomerAttribute($parameters = [])
    {
        return $this->get('removeCustomerAttribute', $parameters);
    }

    public function removeListAttribute($parameters = [])
    {
        return $this->get('removeListAttribute', $parameters);
    }

    public function updateCustomer($parameters = [])
    {
        return $this->get('updateCustomer', $parameters);
    }

    public function updateCustomerAttribute($parameters = [])
    {
        return $this->get('updateCustomerAttribute', $parameters);
    }

    public function updateList($parameters = [])
    {
        return $this->get('updateList', $parameters);
    }

    public function updateListAttribute($parameters = [])
    {
        return $this->get('updateListAttribute', $parameters);
    }

    public function updateListField($parameters = [])
    {
        return $this->get('updateListField', $parameters);
    }

    public function updateSubscription($parameters = [])
    {
        return $this->get('updateSubscription', $parameters);
    }
}

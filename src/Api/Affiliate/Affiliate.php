<?php

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class Affiliate extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Affiliate';

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function getAccountBalance($parameters = [])
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getAccountManager($parameters = [])
    {
        return $this->get('getAccountManager', $parameters);
    }

    public function getPayoneerSignupUrl($parameters = [])
    {
        return $this->get('getPayoneerSignupUrl', $parameters);
    }

    public function getReferralCommission($parameters = [])
    {
        return $this->get('getReferralCommission', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updatePaymentMethodCheck($parameters = [])
    {
        return $this->get('updatePaymentMethodCheck', $parameters);
    }

    public function updatePaymentMethodDirectDeposit($parameters = [])
    {
        return $this->get('updatePaymentMethodDirectDeposit', $parameters);
    }

    public function updatePaymentMethodOther($parameters = [])
    {
        return $this->get('updatePaymentMethodOther', $parameters);
    }

    public function updatePaymentMethodPaypal($parameters = [])
    {
        return $this->get('updatePaymentMethodPaypal', $parameters);
    }

    public function updatePaymentMethodPayQuicker($parameters = [])
    {
        return $this->get('updatePaymentMethodPayQuicker', $parameters);
    }

    public function updatePaymentMethodWire($parameters = [])
    {
        return $this->get('updatePaymentMethodWire', $parameters);
    }
}

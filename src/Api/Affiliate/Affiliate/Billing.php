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

class Billing extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'AffiliateBilling';

    public function findAllInvoices($parameters = [])
    {
        return $this->get('findAllInvoices', $parameters);
    }

    public function findAllReceipts($parameters = [])
    {
        return $this->get('findAllReceipts', $parameters);
    }

    public function findInvoiceById($parameters = [])
    {
        return $this->get('findInvoiceById', $parameters);
    }

    public function findReceiptById($parameters = [])
    {
        return $this->get('findReceiptById', $parameters);
    }

    public function getAccountBalance($parameters = [])
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getPayoutTotals($parameters = [])
    {
        return $this->get('getPayoutTotals', $parameters);
    }

    public function updateTaxId($parameters = [])
    {
        return $this->get('updateTaxId', $parameters);
    }
}

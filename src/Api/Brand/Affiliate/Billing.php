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

class Billing extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'AffiliateBilling';

    public function addInvoiceItem($parameters = [])
    {
        return $this->get('addInvoiceItem', $parameters);
    }

    public function createInvoice($parameters = [])
    {
        return $this->get('createInvoice', $parameters);
    }

    public function createReceipt($parameters = [])
    {
        return $this->get('createReceipt', $parameters);
    }

    public function findAllInvoices($parameters = [])
    {
        return $this->get('findAllInvoices', $parameters);
    }

    public function findAllInvoicesByIds($parameters = [])
    {
        return $this->get('findAllInvoicesByIds', $parameters);
    }

    public function findAllReceipts($parameters = [])
    {
        return $this->get('findAllReceipts', $parameters);
    }

    public function findAllReceiptsByIds($parameters = [])
    {
        return $this->get('findAllReceiptsByIds', $parameters);
    }

    public function findInvoiceById($parameters = [])
    {
        return $this->get('findInvoiceById', $parameters);
    }

    public function findInvoiceStats($parameters = [])
    {
        return $this->get('findInvoiceStats', $parameters);
    }

    public function findLastInvoice($parameters = [])
    {
        return $this->get('findLastInvoice', $parameters);
    }

    public function findLastReceipt($parameters = [])
    {
        return $this->get('findLastReceipt', $parameters);
    }

    public function findReceiptById($parameters = [])
    {
        return $this->get('findReceiptById', $parameters);
    }

    public function generateInvoices($parameters = [])
    {
        return $this->get('generateInvoices', $parameters);
    }

    public function getAccountBalance($parameters = [])
    {
        return $this->get('getAccountBalance', $parameters);
    }

    public function getAccountHistory($parameters = [])
    {
        return $this->get('getAccountHistory', $parameters);
    }

    public function getNextStartDate($parameters = [])
    {
        return $this->get('getNextStartDate', $parameters);
    }

    public function getOutstandingInvoices($parameters = [])
    {
        return $this->get('getOutstandingInvoices', $parameters);
    }

    public function getPayoutTotals($parameters = [])
    {
        return $this->get('getPayoutTotals', $parameters);
    }

    public function removeInvoiceItem($parameters = [])
    {
        return $this->get('removeInvoiceItem', $parameters);
    }

    public function updateInvoice($parameters = [])
    {
        return $this->get('updateInvoice', $parameters);
    }

    public function updateInvoiceField($parameters = [])
    {
        return $this->get('updateInvoiceField', $parameters);
    }

    public function updateReceipt($parameters = [])
    {
        return $this->get('updateReceipt', $parameters);
    }

    public function updateReceiptField($parameters = [])
    {
        return $this->get('updateReceiptField', $parameters);
    }

    public function updateTaxInfo($parameters = [])
    {
        return $this->get('updateTaxInfo', $parameters);
    }
}

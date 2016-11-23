<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Brand\Advertiser;

use BrianFaust\HasOffers\Base;

class Billing extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'AdvertiserBilling';

    public function addInvoiceItem($parameters = [])
    {
        return $this->get('addInvoiceItem', $parameters);
    }

    public function createInvoice($parameters = [])
    {
        return $this->get('createInvoice', $parameters);
    }

    public function findAllInvoices($parameters = [])
    {
        return $this->get('findAllInvoices', $parameters);
    }

    public function findAllInvoicesByIds($parameters = [])
    {
        return $this->get('findAllInvoicesByIds', $parameters);
    }

    public function findInvoiceById($parameters = [])
    {
        return $this->get('findInvoiceById', $parameters);
    }

    public function findInvoiceStats($parameters = [])
    {
        return $this->get('findInvoiceStats', $parameters);
    }

    public function getNextStartDate($parameters = [])
    {
        return $this->get('getNextStartDate', $parameters);
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

    public function updateTaxInfo($parameters = [])
    {
        return $this->get('updateTaxInfo', $parameters);
    }
}

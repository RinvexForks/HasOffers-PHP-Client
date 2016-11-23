<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Api\Affiliate;

use BrianFaust\HasOffers\Base;

class Offer extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'Offer';

    public function acceptOfferTermsAndConditions($parameters = [])
    {
        return $this->get('acceptOfferTermsAndConditions', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllFeaturedOfferIds($parameters = [])
    {
        return $this->get('findAllFeaturedOfferIds', $parameters);
    }

    public function findByCreativeType($parameters = [])
    {
        return $this->get('findByCreativeType', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function findMyOffers($parameters = [])
    {
        return $this->get('findMyOffers', $parameters);
    }

    public function generateTrackingLink($parameters = [])
    {
        return $this->get('generateTrackingLink', $parameters);
    }

    public function getApprovalQuestions($parameters = [])
    {
        return $this->get('getApprovalQuestions', $parameters);
    }

    public function getCategories($parameters = [])
    {
        return $this->get('getCategories', $parameters);
    }

    public function getPayoutDetails($parameters = [])
    {
        return $this->get('getPayoutDetails', $parameters);
    }

    public function getPixels($parameters = [])
    {
        return $this->get('getPixels', $parameters);
    }

    public function getTargetCountries($parameters = [])
    {
        return $this->get('getTargetCountries', $parameters);
    }

    public function getThumbnail($parameters = [])
    {
        return $this->get('getThumbnail', $parameters);
    }

    public function requestOfferAccess($parameters = [])
    {
        return $this->get('requestOfferAccess', $parameters);
    }
}

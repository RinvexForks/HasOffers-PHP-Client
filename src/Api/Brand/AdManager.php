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

class AdManager extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'AdManager';

    public function addCreative($parameters = [])
    {
        return $this->get('addCreative', $parameters);
    }

    public function createCampaign($parameters = [])
    {
        return $this->get('createCampaign', $parameters);
    }

    public function findAllCampaigns($parameters = [])
    {
        return $this->get('findAllCampaigns', $parameters);
    }

    public function findAllCreatives($parameters = [])
    {
        return $this->get('findAllCreatives', $parameters);
    }

    public function findCampaignById($parameters = [])
    {
        return $this->get('findCampaignById', $parameters);
    }

    public function findCreativeById($parameters = [])
    {
        return $this->get('findCreativeById', $parameters);
    }

    public function getActiveNetworkCampaignCount($parameters = [])
    {
        return $this->get('getActiveNetworkCampaignCount', $parameters);
    }

    public function getCampaignCode($parameters = [])
    {
        return $this->get('getCampaignCode', $parameters);
    }

    public function getCampaignCreatives($parameters = [])
    {
        return $this->get('getCampaignCreatives', $parameters);
    }

    public function getUsage($parameters = [])
    {
        return $this->get('getUsage', $parameters);
    }

    public function setCreativeCustomWeights($parameters = [])
    {
        return $this->get('setCreativeCustomWeights', $parameters);
    }

    public function setCreativeWeights($parameters = [])
    {
        return $this->get('setCreativeWeights', $parameters);
    }

    public function updateCampaign($parameters = [])
    {
        return $this->get('updateCampaign', $parameters);
    }

    public function updateCampaignField($parameters = [])
    {
        return $this->get('updateCampaignField', $parameters);
    }

    public function updateCreative($parameters = [])
    {
        return $this->get('updateCreative', $parameters);
    }

    public function updateCreativeField($parameters = [])
    {
        return $this->get('updateCreativeField', $parameters);
    }
}

<?php

namespace BrianFaust\HasOffers\Api\Brand\Offer;

use BrianFaust\HasOffers\Base;

class Targeting extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'OfferTargeting';

    public function addTargetRuleToOffer($parameters = [])
    {
        return $this->get('addTargetRuleToOffer', $parameters);
    }

    public function createTargetRule($parameters = [])
    {
        return $this->get('createTargetRule', $parameters);
    }

    public function deleteTargetRule($parameters = [])
    {
        return $this->get('deleteTargetRule', $parameters);
    }

    public function findTargetRules($parameters = [])
    {
        return $this->get('findTargetRules', $parameters);
    }

    public function getActiveOfferIdsUsingRule($parameters = [])
    {
        return $this->get('getActiveOfferIdsUsingRule', $parameters);
    }

    public function getActiveUsesOfRule($parameters = [])
    {
        return $this->get('getActiveUsesOfRule', $parameters);
    }

    public function getRuleTargetingForOffer($parameters = [])
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }

    public function removeTargetRuleFromOffer($parameters = [])
    {
        return $this->get('removeTargetRuleFromOffer', $parameters);
    }

    public function updateTargetRule($parameters = [])
    {
        return $this->get('updateTargetRule', $parameters);
    }

    public function updateTargetRuleOfferAction($parameters = [])
    {
        return $this->get('updateTargetRuleOfferAction', $parameters);
    }
}

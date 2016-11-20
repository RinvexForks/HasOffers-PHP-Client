<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class CashflowGroup extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'CashflowGroup';

    public function createCashflowGroup($parameters = [])
    {
        return $this->get('createCashflowGroup', $parameters);
    }

    public function findCashflowGroupById($parameters = [])
    {
        return $this->get('findCashflowGroupById', $parameters);
    }

    public function findCashflowGroups($parameters = [])
    {
        return $this->get('findCashflowGroups', $parameters);
    }

    public function findCashflowGroupUsage($parameters = [])
    {
        return $this->get('findCashflowGroupUsage', $parameters);
    }

    public function getCashflowRuleFieldDefinitions($parameters = [])
    {
        return $this->get('getCashflowRuleFieldDefinitions', $parameters);
    }

    public function getGoalPayoutGroupsForGoal($parameters = [])
    {
        return $this->get('getGoalPayoutGroupsForGoal', $parameters);
    }

    public function getGoalRevenueGroupsForGoal($parameters = [])
    {
        return $this->get('getGoalRevenueGroupsForGoal', $parameters);
    }

    public function getOfferPayoutGroupsForOffer($parameters = [])
    {
        return $this->get('getOfferPayoutGroupsForOffer', $parameters);
    }

    public function getOfferRevenueGroupsForOffer($parameters = [])
    {
        return $this->get('getOfferRevenueGroupsForOffer', $parameters);
    }

    public function replaceGoalPayoutGroupsForGoal($parameters = [])
    {
        return $this->get('replaceGoalPayoutGroupsForGoal', $parameters);
    }

    public function replaceGoalRevenueGroupsForGoal($parameters = [])
    {
        return $this->get('replaceGoalRevenueGroupsForGoal', $parameters);
    }

    public function replaceOfferPayoutGroupsForOffer($parameters = [])
    {
        return $this->get('replaceOfferPayoutGroupsForOffer', $parameters);
    }

    public function replaceOfferRevenueGroupsForOffer($parameters = [])
    {
        return $this->get('replaceOfferRevenueGroupsForOffer', $parameters);
    }

    public function updateCashflowGroup($parameters = [])
    {
        return $this->get('updateCashflowGroup', $parameters);
    }
}

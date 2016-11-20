<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Advertiser extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Advertiser';

    public function addAccountNote($parameters = [])
    {
        return $this->get('addAccountNote', $parameters);
    }

    public function block($parameters = [])
    {
        return $this->get('block', $parameters);
    }

    public function blockAffiliate($parameters = [])
    {
        return $this->get('blockAffiliate', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function createSignupQuestion($parameters = [])
    {
        return $this->get('createSignupQuestion', $parameters);
    }

    public function createSignupQuestionAnswer($parameters = [])
    {
        return $this->get('createSignupQuestionAnswer', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAccountManagerId($parameters = [])
    {
        return $this->get('findAllIdsByAccountManagerId', $parameters);
    }

    public function findAllPendingUnassignedAdvertiserIds($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAdvertiserIds', $parameters);
    }

    public function findAllPendingUnassignedAdvertisers($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAdvertisers', $parameters);
    }

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

    public function getAccountNotes($parameters = [])
    {
        return $this->get('getAccountNotes', $parameters);
    }

    public function getBlockedAffiliateIds($parameters = [])
    {
        return $this->get('getBlockedAffiliateIds', $parameters);
    }

    public function getBlockedReasons($parameters = [])
    {
        return $this->get('getBlockedReasons', $parameters);
    }

    public function getCreatorUser($parameters = [])
    {
        return $this->get('getCreatorUser', $parameters);
    }

    public function getOverview($parameters = [])
    {
        return $this->get('getOverview', $parameters);
    }

    public function getOwnersAdvertiserAccountId($parameters = [])
    {
        return $this->get('getOwnersAdvertiserAccountId', $parameters);
    }

    public function getSignupAnswers($parameters = [])
    {
        return $this->get('getSignupAnswers', $parameters);
    }

    public function getSignupQuestions($parameters = [])
    {
        return $this->get('getSignupQuestions', $parameters);
    }

    public function getUnblockedAffiliateIds($parameters = [])
    {
        return $this->get('getUnblockedAffiliateIds', $parameters);
    }

    public function signup($parameters = [])
    {
        return $this->get('signup', $parameters);
    }

    public function unblockAffiliate($parameters = [])
    {
        return $this->get('unblockAffiliate', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateAccountNote($parameters = [])
    {
        return $this->get('updateAccountNote', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }

    public function updateSignupQuestion($parameters = [])
    {
        return $this->get('updateSignupQuestion', $parameters);
    }

    public function updateSignupQuestionAnswer($parameters = [])
    {
        return $this->get('updateSignupQuestionAnswer', $parameters);
    }
}

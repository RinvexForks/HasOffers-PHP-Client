<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Affiliate extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Affiliate';

    public function addAccountNote($parameters = [])
    {
        return $this->get('addAccountNote', $parameters);
    }

    public function adjustAffiliateClicks($parameters = [])
    {
        return $this->get('adjustAffiliateClicks', $parameters);
    }

    public function block($parameters = [])
    {
        return $this->get('block', $parameters);
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

    public function disableFraudAlert($parameters = [])
    {
        return $this->get('disableFraudAlert', $parameters);
    }

    public function enableFraudAlert($parameters = [])
    {
        return $this->get('enableFraudAlert', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllFraudAlerts($parameters = [])
    {
        return $this->get('findAllFraudAlerts', $parameters);
    }

    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAccountManagerId($parameters = [])
    {
        return $this->get('findAllIdsByAccountManagerId', $parameters);
    }

    public function findAllPendingUnassignedAffiliateIds($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAffiliateIds', $parameters);
    }

    public function findAllPendingUnassignedAffiliates($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAffiliates', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function findList($parameters = [])
    {
        return $this->get('findList', $parameters);
    }

    public function getAccountManager($parameters = [])
    {
        return $this->get('getAccountManager', $parameters);
    }

    public function getAccountNotes($parameters = [])
    {
        return $this->get('getAccountNotes', $parameters);
    }

    public function getAffiliateTier($parameters = [])
    {
        return $this->get('getAffiliateTier', $parameters);
    }

    public function getApprovedOfferIds($parameters = [])
    {
        return $this->get('getApprovedOfferIds', $parameters);
    }

    public function getBlockedOfferIds($parameters = [])
    {
        return $this->get('getBlockedOfferIds', $parameters);
    }

    public function getBlockedReasons($parameters = [])
    {
        return $this->get('getBlockedReasons', $parameters);
    }

    /**
     * Gets the original/creator Affiliate User for an Affiliate account.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCreatorUser($parameters = [])
    {
        return $this->get('getCreatorUser', $parameters);
    }

    public function getOfferConversionCaps($parameters = [])
    {
        return $this->get('getOfferConversionCaps', $parameters);
    }

    public function getOfferHostnames($parameters = [])
    {
        return $this->get('getOfferHostnames', $parameters);
    }

    public function getOfferPayouts($parameters = [])
    {
        return $this->get('getOfferPayouts', $parameters);
    }

    public function getOfferPayoutsAll($parameters = [])
    {
        return $this->get('getOfferPayoutsAll', $parameters);
    }

    public function getOfferPixels($parameters = [])
    {
        return $this->get('getOfferPixels', $parameters);
    }

    public function getOwnersAffiliateAccountId($parameters = [])
    {
        return $this->get('getOwnersAffiliateAccountId', $parameters);
    }

    public function getPaymentMethods($parameters = [])
    {
        return $this->get('getPaymentMethods', $parameters);
    }

    public function getReferralAffiliateIds($parameters = [])
    {
        return $this->get('getReferralAffiliateIds', $parameters);
    }

    public function getReferralCommission($parameters = [])
    {
        return $this->get('getReferralCommission', $parameters);
    }

    public function getReferringAffiliate($parameters = [])
    {
        return $this->get('getReferringAffiliate', $parameters);
    }

    public function getSignupAnswers($parameters = [])
    {
        return $this->get('getSignupAnswers', $parameters);
    }

    public function getSignupQuestions($parameters = [])
    {
        return $this->get('getSignupQuestions', $parameters);
    }

    public function getUnapprovedOfferIds($parameters = [])
    {
        return $this->get('getUnapprovedOfferIds', $parameters);
    }

    public function getUnblockedOfferIds($parameters = [])
    {
        return $this->get('getUnblockedOfferIds', $parameters);
    }

    /**
     * Delete a custom Affiliate Referral Commission rate/amount setting for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomReferralCommission($parameters = [])
    {
        return $this->get('removeCustomReferralCommission', $parameters);
    }

    /**
     * Set the custom Affiliate Referral Commission amounts/rates for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomReferralCommission($parameters = [])
    {
        return $this->get('setCustomReferralCommission', $parameters);
    }

    public function signup($parameters = [])
    {
        return $this->get('signup', $parameters);
    }

    public function simpleSearch($parameters = [])
    {
        return $this->get('simpleSearch', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateAccountNote($parameters = [])
    {
        return $this->get('updateAccountNote', $parameters);
    }

    public function updateByRefId($parameters = [])
    {
        return $this->get('updateByRefId', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
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

    public function updatePaymentMethodPayoneer($parameters = [])
    {
        return $this->get('updatePaymentMethodPayoneer', $parameters);
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

    public function updateSignupQuestion($parameters = [])
    {
        return $this->get('updateSignupQuestion', $parameters);
    }

    public function updateSignupQuestionAnswer($parameters = [])
    {
        return $this->get('updateSignupQuestionAnswer', $parameters);
    }
}

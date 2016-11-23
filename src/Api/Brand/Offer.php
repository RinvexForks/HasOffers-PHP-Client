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

class Offer extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Offer';

    public function addApprovalQuestion($parameters = [])
    {
        return $this->get('addApprovalQuestion', $parameters);
    }

    public function addCategory($parameters = [])
    {
        return $this->get('addCategory', $parameters);
    }

    public function addGroup($parameters = [])
    {
        return $this->get('addGroup', $parameters);
    }

    public function addTargetBrowser($parameters = [])
    {
        return $this->get('addTargetBrowser', $parameters);
    }

    public function addTargetCountry($parameters = [])
    {
        return $this->get('addTargetCountry', $parameters);
    }

    public function addTargetCountryRegion($parameters = [])
    {
        return $this->get('addTargetCountryRegion', $parameters);
    }

    public function blockAffiliate($parameters = [])
    {
        return $this->get('blockAffiliate', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllFeaturedOfferIds($parameters = [])
    {
        return $this->get('findAllFeaturedOfferIds', $parameters);
    }

    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    public function findAllIdsByAdvertiserId($parameters = [])
    {
        return $this->get('findAllIdsByAdvertiserId', $parameters);
    }

    public function findAllIdsByAffiliateId($parameters = [])
    {
        return $this->get('findAllIdsByAffiliateId', $parameters);
    }

    public function findAllPendingAffiliateApprovals($parameters = [])
    {
        return $this->get('findAllPendingAffiliateApprovals', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function generateTrackingLink($parameters = [])
    {
        return $this->get('generateTrackingLink', $parameters);
    }

    public function generateTrackingPixel($parameters = [])
    {
        return $this->get('generateTrackingPixel', $parameters);
    }

    public function getAffiliateApplicationNote($parameters = [])
    {
        return $this->get('getAffiliateApplicationNote', $parameters);
    }

    public function getAffiliateApprovalStatus($parameters = [])
    {
        return $this->get('getAffiliateApprovalStatus', $parameters);
    }

    public function getAffiliateHostnames($parameters = [])
    {
        return $this->get('getAffiliateHostnames', $parameters);
    }

    /**
     * Gets a summary of payout and revenue-related details for an Affiliate/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayment($parameters = [])
    {
        return $this->get('getAffiliatePayment', $parameters);
    }

    /**
     * Get an Affiliate-specific Offer Payout for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayout($parameters = [])
    {
        return $this->get('getAffiliatePayout', $parameters);
    }

    /**
     * Get an Affiliate-specific Offer Revenue for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateRevenue($parameters = [])
    {
        return $this->get('getAffiliateRevenue', $parameters);
    }

    /**
     * Get a list of all answers an Affiliate provided for an Offer's signup/approval questions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalAnswers($parameters = [])
    {
        return $this->get('getApprovalAnswers', $parameters);
    }

    /**
     * Get Offer Approval/Signup Questions for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalQuestions($parameters = [])
    {
        return $this->get('getApprovalQuestions', $parameters);
    }

    public function getApprovedAffiliateIds($parameters = [])
    {
        return $this->get('getApprovedAffiliateIds', $parameters);
    }

    public function getBlockedAffiliateIds($parameters = [])
    {
        return $this->get('getBlockedAffiliateIds', $parameters);
    }

    public function getCategories($parameters = [])
    {
        return $this->get('getCategories', $parameters);
    }

    public function getConversionCaps($parameters = [])
    {
        return $this->get('getConversionCaps', $parameters);
    }

    public function getCustomerList($parameters = [])
    {
        return $this->get('getCustomerList', $parameters);
    }

    public function getGroups($parameters = [])
    {
        return $this->get('getGroups', $parameters);
    }

    public function getOfferFiles($parameters = [])
    {
        return $this->get('getOfferFiles', $parameters);
    }

    public function getOfferFilesWithCreativeCode($parameters = [])
    {
        return $this->get('getOfferFilesWithCreativeCode', $parameters);
    }

    public function getOfferListByGroupId($parameters = [])
    {
        return $this->get('getOfferListByGroupId', $parameters);
    }

    public function getOfferUrls($parameters = [])
    {
        return $this->get('getOfferUrls', $parameters);
    }

    public function getOverview($parameters = [])
    {
        return $this->get('getOverview', $parameters);
    }

    public function getPayouts($parameters = [])
    {
        return $this->get('getPayouts', $parameters);
    }

    public function getPixels($parameters = [])
    {
        return $this->get('getPixels', $parameters);
    }

    public function getRevenues($parameters = [])
    {
        return $this->get('getRevenues', $parameters);
    }

    public function getTargetBrowsers($parameters = [])
    {
        return $this->get('getTargetBrowsers', $parameters);
    }

    public function getTargetCountries($parameters = [])
    {
        return $this->get('getTargetCountries', $parameters);
    }

    public function getThumbnail($parameters = [])
    {
        return $this->get('getThumbnail', $parameters);
    }

    public function getTierPayouts($parameters = [])
    {
        return $this->get('getTierPayouts', $parameters);
    }

    public function getTierRevenues($parameters = [])
    {
        return $this->get('getTierRevenues', $parameters);
    }

    public function getUnapprovedAffiliateIds($parameters = [])
    {
        return $this->get('getUnapprovedAffiliateIds', $parameters);
    }

    public function removeCategory($parameters = [])
    {
        return $this->get('removeCategory', $parameters);
    }

    public function removeConversionCap($parameters = [])
    {
        return $this->get('removeConversionCap', $parameters);
    }

    public function removeGroup($parameters = [])
    {
        return $this->get('removeGroup', $parameters);
    }

    public function removePayout($parameters = [])
    {
        return $this->get('removePayout', $parameters);
    }

    public function removeRevenue($parameters = [])
    {
        return $this->get('removeRevenue', $parameters);
    }

    public function removeTargetBrowser($parameters = [])
    {
        return $this->get('removeTargetBrowser', $parameters);
    }

    public function removeTargetCountry($parameters = [])
    {
        return $this->get('removeTargetCountry', $parameters);
    }

    public function removeTargetCountryRegion($parameters = [])
    {
        return $this->get('removeTargetCountryRegion', $parameters);
    }

    public function removeTierPayout($parameters = [])
    {
        return $this->get('removeTierPayout', $parameters);
    }

    public function removeTierRevenue($parameters = [])
    {
        return $this->get('removeTierRevenue', $parameters);
    }

    /**
     * Create an Affiliate's answer to an Offer's signup/approval question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function saveApprovalQuestionAnswer($parameters = [])
    {
        return $this->get('saveApprovalQuestionAnswer', $parameters);
    }

    public function setAffiliateApproval($parameters = [])
    {
        return $this->get('setAffiliateApproval', $parameters);
    }

    public function setAffiliateHostname($parameters = [])
    {
        return $this->get('setAffiliateHostname', $parameters);
    }

    public function setAffiliateTermsDate($parameters = [])
    {
        return $this->get('setAffiliateTermsDate', $parameters);
    }

    public function setCategories($parameters = [])
    {
        return $this->get('setCategories', $parameters);
    }

    public function setConversionCap($parameters = [])
    {
        return $this->get('setConversionCap', $parameters);
    }

    public function setGroups($parameters = [])
    {
        return $this->get('setGroups', $parameters);
    }

    public function setMultipleAffiliateApprovals($parameters = [])
    {
        return $this->get('setMultipleAffiliateApprovals', $parameters);
    }

    public function setPayout($parameters = [])
    {
        return $this->get('setPayout', $parameters);
    }

    public function setRevenue($parameters = [])
    {
        return $this->get('setRevenue', $parameters);
    }

    public function setTargetBrowsers($parameters = [])
    {
        return $this->get('setTargetBrowsers', $parameters);
    }

    /**
     * Set a list of Countries and/or Regions that an Offer should use for geo-targeting.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTargetCountries($parameters = [])
    {
        return $this->get('setTargetCountries', $parameters);
    }

    /**
     * Sets Affiliate Tier Payout for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierPayout($parameters = [])
    {
        return $this->get('setTierPayout', $parameters);
    }

    /**
     * Sets Affiliate Tier Revenue for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierRevenue($parameters = [])
    {
        return $this->get('setTierRevenue', $parameters);
    }

    public function unblockAffiliate($parameters = [])
    {
        return $this->get('unblockAffiliate', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateApprovalQuestion($parameters = [])
    {
        return $this->get('updateApprovalQuestion', $parameters);
    }

    public function updateByRefId($parameters = [])
    {
        return $this->get('updateByRefId', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}

<?php

namespace BrianFaust\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Application extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Application';

    public function addAffiliateTier($parameters = [])
    {
        return $this->get('addAffiliateTier', $parameters);
    }

    public function addHostname($parameters = [])
    {
        return $this->get('addHostname', $parameters);
    }

    public function addOfferCategory($parameters = [])
    {
        return $this->get('addOfferCategory', $parameters);
    }

    public function addOfferGroup($parameters = [])
    {
        return $this->get('addOfferGroup', $parameters);
    }

    public function changeAdvertiserApiKey($parameters = [])
    {
        return $this->get('changeAdvertiserApiKey', $parameters);
    }

    public function changeAffiliateApiKey($parameters = [])
    {
        return $this->get('changeAffiliateApiKey', $parameters);
    }

    public function changeNetworkApiKey($parameters = [])
    {
        return $this->get('changeNetworkApiKey', $parameters);
    }

    public function createAdvertiserApiKey($parameters = [])
    {
        return $this->get('createAdvertiserApiKey', $parameters);
    }

    public function createAffiliateApiKey($parameters = [])
    {
        return $this->get('createAffiliateApiKey', $parameters);
    }

    public function decryptUnsubHash($parameters = [])
    {
        return $this->get('decryptUnsubHash', $parameters);
    }

    public function findAdvertiserApiKey($parameters = [])
    {
        return $this->get('findAdvertiserApiKey', $parameters);
    }

    public function findAdvertiserApiKeyByAdvertiserId($parameters = [])
    {
        return $this->get('findAdvertiserApiKeyByAdvertiserId', $parameters);
    }

    public function findAffiliateApiKey($parameters = [])
    {
        return $this->get('findAffiliateApiKey', $parameters);
    }

    public function findAffiliateApiKeyByAffiliateId($parameters = [])
    {
        return $this->get('findAffiliateApiKeyByAffiliateId', $parameters);
    }

    public function findAllAdvertiserApiKeys($parameters = [])
    {
        return $this->get('findAllAdvertiserApiKeys', $parameters);
    }

    public function findAllAffiliateApiKeys($parameters = [])
    {
        return $this->get('findAllAffiliateApiKeys', $parameters);
    }

    public function findAllAffiliateTierAffiliateIds($parameters = [])
    {
        return $this->get('findAllAffiliateTierAffiliateIds', $parameters);
    }

    public function findAllAffiliateTiers($parameters = [])
    {
        return $this->get('findAllAffiliateTiers', $parameters);
    }

    public function findAllBrowsers($parameters = [])
    {
        return $this->get('findAllBrowsers', $parameters);
    }

    public function findAllCountries($parameters = [])
    {
        return $this->get('findAllCountries', $parameters);
    }

    public function findAllHostnames($parameters = [])
    {
        return $this->get('findAllHostnames', $parameters);
    }

    public function findAllOfferCategories($parameters = [])
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    public function findAllOfferCategoryOfferIds($parameters = [])
    {
        return $this->get('findAllOfferCategoryOfferIds', $parameters);
    }

    public function findAllOfferGroupOfferIds($parameters = [])
    {
        return $this->get('findAllOfferGroupOfferIds', $parameters);
    }

    public function findAllOfferGroups($parameters = [])
    {
        return $this->get('findAllOfferGroups', $parameters);
    }

    public function findAllPermissions($parameters = [])
    {
        return $this->get('findAllPermissions', $parameters);
    }

    public function findAllRegions($parameters = [])
    {
        return $this->get('findAllRegions', $parameters);
    }

    public function findAllTimezones($parameters = [])
    {
        return $this->get('findAllTimezones', $parameters);
    }

    public function findBrowserById($parameters = [])
    {
        return $this->get('findBrowserById', $parameters);
    }

    public function findCountryByCode($parameters = [])
    {
        return $this->get('findCountryByCode', $parameters);
    }

    public function findPermissionById($parameters = [])
    {
        return $this->get('findPermissionById', $parameters);
    }

    public function findPermissionByName($parameters = [])
    {
        return $this->get('findPermissionByName', $parameters);
    }

    public function findPermissionsByGroup($parameters = [])
    {
        return $this->get('findPermissionsByGroup', $parameters);
    }

    public function findTimezoneById($parameters = [])
    {
        return $this->get('findTimezoneById', $parameters);
    }

    public function findUserAuthIps($parameters = [])
    {
        return $this->get('findUserAuthIps', $parameters);
    }

    public function generateAllUnsubLinks($parameters = [])
    {
        return $this->get('generateAllUnsubLinks', $parameters);
    }

    public function generateUnsubLink($parameters = [])
    {
        return $this->get('generateUnsubLink', $parameters);
    }

    public function getAccountInformation($parameters = [])
    {
        return $this->get('getAccountInformation', $parameters);
    }

    public function getActiveOfferCategoryCount($parameters = [])
    {
        return $this->get('getActiveOfferCategoryCount', $parameters);
    }

    public function getBrand($parameters = [])
    {
        return $this->get('getBrand', $parameters);
    }

    public function getBrandInformation($parameters = [])
    {
        return $this->get('getBrandInformation', $parameters);
    }

    public function getCountryRegions($parameters = [])
    {
        return $this->get('getCountryRegions', $parameters);
    }

    public function getPoFile($parameters = [])
    {
        return $this->get('getPoFile', $parameters);
    }

    public function getTimezone($parameters = [])
    {
        return $this->get('getTimezone', $parameters);
    }

    public function importAdvertisers($parameters = [])
    {
        return $this->get('importAdvertisers', $parameters);
    }

    public function importOffers($parameters = [])
    {
        return $this->get('importOffers', $parameters);
    }

    public function resetPassword($parameters = [])
    {
        return $this->get('resetPassword', $parameters);
    }

    public function updateAccountInformation($parameters = [])
    {
        return $this->get('updateAccountInformation', $parameters);
    }

    public function updateAdvertiserApiKey($parameters = [])
    {
        return $this->get('updateAdvertiserApiKey', $parameters);
    }

    public function updateAffiliateApiKey($parameters = [])
    {
        return $this->get('updateAffiliateApiKey', $parameters);
    }

    public function updateAffiliateTier($parameters = [])
    {
        return $this->get('updateAffiliateTier', $parameters);
    }

    public function updateBrandEmail($parameters = [])
    {
        return $this->get('updateBrandEmail', $parameters);
    }

    public function updateBrandHostname($parameters = [])
    {
        return $this->get('updateBrandHostname', $parameters);
    }

    public function updateBrandJumpHostname($parameters = [])
    {
        return $this->get('updateBrandJumpHostname', $parameters);
    }

    public function updateBrandJumpHostnameHasSsl($parameters = [])
    {
        return $this->get('updateBrandJumpHostnameHasSsl', $parameters);
    }

    public function updateBrandNetworkName($parameters = [])
    {
        return $this->get('updateBrandNetworkName', $parameters);
    }

    public function updateHostname($parameters = [])
    {
        return $this->get('updateHostname', $parameters);
    }

    public function updateOfferCategory($parameters = [])
    {
        return $this->get('updateOfferCategory', $parameters);
    }

    public function updateOfferGroup($parameters = [])
    {
        return $this->get('updateOfferGroup', $parameters);
    }

    public function uploadPoFile($parameters = [])
    {
        return $this->get('uploadPoFile', $parameters);
    }

    public function validAdvertiserApiKey($parameters = [])
    {
        return $this->get('validAdvertiserApiKey', $parameters);
    }

    public function validAffiliateApiKey($parameters = [])
    {
        return $this->get('validAffiliateApiKey', $parameters);
    }

    public function whitelistNetworkApiIp($parameters = [])
    {
        return $this->get('whitelistNetworkApiIp', $parameters);
    }
}

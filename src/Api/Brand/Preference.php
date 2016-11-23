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

class Preference extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Preference';

    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findByName($parameters = [])
    {
        return $this->get('findByName', $parameters);
    }

    public function findPreferenceByNameTypeAndAccountId($parameters = [])
    {
        return $this->get('findPreferenceByNameTypeAndAccountId', $parameters);
    }

    public function findPreferenceByNameTypeAndUserId($parameters = [])
    {
        return $this->get('findPreferenceByNameTypeAndUserId', $parameters);
    }

    public function findPreferencesByTypeAndAccountId($parameters = [])
    {
        return $this->get('findPreferencesByTypeAndAccountId', $parameters);
    }

    public function findPreferencesByTypeAndUserId($parameters = [])
    {
        return $this->get('findPreferencesByTypeAndUserId', $parameters);
    }

    public function getValue($parameters = [])
    {
        return $this->get('getValue', $parameters);
    }

    public function isEnabled($parameters = [])
    {
        return $this->get('isEnabled', $parameters);
    }

    public function setAccountPreference($parameters = [])
    {
        return $this->get('setAccountPreference', $parameters);
    }

    public function setUserPreference($parameters = [])
    {
        return $this->get('setUserPreference', $parameters);
    }

    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }

    public function updateAllUserPreferences($parameters = [])
    {
        return $this->get('updateAllUserPreferences', $parameters);
    }

    public function userPreferenceUpdateTermsAndConditions($parameters = [])
    {
        return $this->get('userPreferenceUpdateTermsAndConditions', $parameters);
    }
}

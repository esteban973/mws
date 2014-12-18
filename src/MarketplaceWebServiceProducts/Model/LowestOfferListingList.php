<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:59:56 GMT 2014
 */

/**
 * MarketplaceWebServiceProducts_Model_LowestOfferListingList
 *
 * Properties:
 * <ul>
 *
 * <li>LowestOfferListing: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_LowestOfferListingList extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'LowestOfferListing' => array(
                'FieldValue' => array(),
                'FieldType' => array('MarketplaceWebServiceProducts_Model_LowestOfferListingType')
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the LowestOfferListing property.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingType[] LowestOfferListing.
     */
    public function getLowestOfferListing()
    {
        if ($this->_fields['LowestOfferListing']['FieldValue'] == null) {
            $this->_fields['LowestOfferListing']['FieldValue'] = array();
        }
        return $this->_fields['LowestOfferListing']['FieldValue'];
    }

    /**
     * Set the value of the LowestOfferListing property.
     *
     * @param array $value lowestOfferListing
     * @return $this This instance
     */
    public function setLowestOfferListing($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['LowestOfferListing']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear LowestOfferListing.
     */
    public function unsetLowestOfferListing()
    {
        $this->_fields['LowestOfferListing']['FieldValue'] = array();
    }

    /**
     * Check to see if LowestOfferListing is set.
     *
     * @return true if LowestOfferListing is set.
     */
    public function isSetLowestOfferListing()
    {
        return !empty($this->_fields['LowestOfferListing']['FieldValue']);
    }

    /**
     * Add values for LowestOfferListing, return this.
     *
     * @param lowestOfferListing
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withLowestOfferListing()
    {
        foreach (func_get_args() as $LowestOfferListing) {
            $this->_fields['LowestOfferListing']['FieldValue'][] = $LowestOfferListing;
        }
        return $this;
    }

}

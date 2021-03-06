<?php
/**
 * GetCorporationsCorporationIdOutpostsOutpostIdOkServices
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCorporationsCorporationIdOutpostsOutpostIdOkServices Class Doc Comment
 *
 * @category    Class */
 // @description service object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdOutpostsOutpostIdOkServices implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_outposts_outpost_id_ok_services';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'discount_per_good_standing' => 'double',
        'minimum_standing' => 'double',
        'service_name' => 'string',
        'surcharge_per_bad_standing' => 'double'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'discount_per_good_standing' => 'discount_per_good_standing',
        'minimum_standing' => 'minimum_standing',
        'service_name' => 'service_name',
        'surcharge_per_bad_standing' => 'surcharge_per_bad_standing'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'discount_per_good_standing' => 'setDiscountPerGoodStanding',
        'minimum_standing' => 'setMinimumStanding',
        'service_name' => 'setServiceName',
        'surcharge_per_bad_standing' => 'setSurchargePerBadStanding'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'discount_per_good_standing' => 'getDiscountPerGoodStanding',
        'minimum_standing' => 'getMinimumStanding',
        'service_name' => 'getServiceName',
        'surcharge_per_bad_standing' => 'getSurchargePerBadStanding'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SERVICE_NAME_BOUNTY_MISSIONS = 'Bounty Missions';
    const SERVICE_NAME_ASSASSINATION_MISSIONS = 'Assassination Missions';
    const SERVICE_NAME_COURIER_MISSIONS = 'Courier Missions';
    const SERVICE_NAME_INTERBUS = 'Interbus';
    const SERVICE_NAME_REPROCESSING_PLANT = 'Reprocessing Plant';
    const SERVICE_NAME_REFINERY = 'Refinery';
    const SERVICE_NAME_MARKET = 'Market';
    const SERVICE_NAME_BLACK_MARKET = 'Black Market';
    const SERVICE_NAME_STOCK_EXCHANGE = 'Stock Exchange';
    const SERVICE_NAME_CLONING = 'Cloning';
    const SERVICE_NAME_SURGERY = 'Surgery';
    const SERVICE_NAME_DNA_THERAPY = 'DNA Therapy';
    const SERVICE_NAME_REPAIR_FACILITIES = 'Repair Facilities';
    const SERVICE_NAME_FACTORY = 'Factory';
    const SERVICE_NAME_LABORATORY = 'Laboratory';
    const SERVICE_NAME_GAMBLING = 'Gambling';
    const SERVICE_NAME_FITTING = 'Fitting';
    const SERVICE_NAME_PAINTSHOP = 'Paintshop';
    const SERVICE_NAME_NEWS = 'News';
    const SERVICE_NAME_STORAGE = 'Storage';
    const SERVICE_NAME_INSURANCE = 'Insurance';
    const SERVICE_NAME_DOCKING = 'Docking';
    const SERVICE_NAME_OFFICE_RENTAL = 'Office Rental';
    const SERVICE_NAME_JUMP_CLONE_FACILITY = 'Jump Clone Facility';
    const SERVICE_NAME_LOYALTY_POINT_STORE = 'Loyalty Point Store';
    const SERVICE_NAME_NAVY_OFFICES = 'Navy Offices';
    const SERVICE_NAME_SECURITY_OFFICE = 'Security Office';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getServiceNameAllowableValues()
    {
        return [
            self::SERVICE_NAME_BOUNTY_MISSIONS,
            self::SERVICE_NAME_ASSASSINATION_MISSIONS,
            self::SERVICE_NAME_COURIER_MISSIONS,
            self::SERVICE_NAME_INTERBUS,
            self::SERVICE_NAME_REPROCESSING_PLANT,
            self::SERVICE_NAME_REFINERY,
            self::SERVICE_NAME_MARKET,
            self::SERVICE_NAME_BLACK_MARKET,
            self::SERVICE_NAME_STOCK_EXCHANGE,
            self::SERVICE_NAME_CLONING,
            self::SERVICE_NAME_SURGERY,
            self::SERVICE_NAME_DNA_THERAPY,
            self::SERVICE_NAME_REPAIR_FACILITIES,
            self::SERVICE_NAME_FACTORY,
            self::SERVICE_NAME_LABORATORY,
            self::SERVICE_NAME_GAMBLING,
            self::SERVICE_NAME_FITTING,
            self::SERVICE_NAME_PAINTSHOP,
            self::SERVICE_NAME_NEWS,
            self::SERVICE_NAME_STORAGE,
            self::SERVICE_NAME_INSURANCE,
            self::SERVICE_NAME_DOCKING,
            self::SERVICE_NAME_OFFICE_RENTAL,
            self::SERVICE_NAME_JUMP_CLONE_FACILITY,
            self::SERVICE_NAME_LOYALTY_POINT_STORE,
            self::SERVICE_NAME_NAVY_OFFICES,
            self::SERVICE_NAME_SECURITY_OFFICE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['discount_per_good_standing'] = isset($data['discount_per_good_standing']) ? $data['discount_per_good_standing'] : null;
        $this->container['minimum_standing'] = isset($data['minimum_standing']) ? $data['minimum_standing'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['surcharge_per_bad_standing'] = isset($data['surcharge_per_bad_standing']) ? $data['surcharge_per_bad_standing'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['discount_per_good_standing'] === null) {
            $invalid_properties[] = "'discount_per_good_standing' can't be null";
        }
        if ($this->container['minimum_standing'] === null) {
            $invalid_properties[] = "'minimum_standing' can't be null";
        }
        if ($this->container['service_name'] === null) {
            $invalid_properties[] = "'service_name' can't be null";
        }
        $allowed_values = array("Bounty Missions", "Assassination Missions", "Courier Missions", "Interbus", "Reprocessing Plant", "Refinery", "Market", "Black Market", "Stock Exchange", "Cloning", "Surgery", "DNA Therapy", "Repair Facilities", "Factory", "Laboratory", "Gambling", "Fitting", "Paintshop", "News", "Storage", "Insurance", "Docking", "Office Rental", "Jump Clone Facility", "Loyalty Point Store", "Navy Offices", "Security Office");
        if (!in_array($this->container['service_name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'service_name', must be one of #{allowed_values}.";
        }

        if ($this->container['surcharge_per_bad_standing'] === null) {
            $invalid_properties[] = "'surcharge_per_bad_standing' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['discount_per_good_standing'] === null) {
            return false;
        }
        if ($this->container['minimum_standing'] === null) {
            return false;
        }
        if ($this->container['service_name'] === null) {
            return false;
        }
        $allowed_values = array("Bounty Missions", "Assassination Missions", "Courier Missions", "Interbus", "Reprocessing Plant", "Refinery", "Market", "Black Market", "Stock Exchange", "Cloning", "Surgery", "DNA Therapy", "Repair Facilities", "Factory", "Laboratory", "Gambling", "Fitting", "Paintshop", "News", "Storage", "Insurance", "Docking", "Office Rental", "Jump Clone Facility", "Loyalty Point Store", "Navy Offices", "Security Office");
        if (!in_array($this->container['service_name'], $allowed_values)) {
            return false;
        }
        if ($this->container['surcharge_per_bad_standing'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets discount_per_good_standing
     * @return double
     */
    public function getDiscountPerGoodStanding()
    {
        return $this->container['discount_per_good_standing'];
    }

    /**
     * Sets discount_per_good_standing
     * @param double $discount_per_good_standing discount_per_good_standing number
     * @return $this
     */
    public function setDiscountPerGoodStanding($discount_per_good_standing)
    {
        $this->container['discount_per_good_standing'] = $discount_per_good_standing;

        return $this;
    }

    /**
     * Gets minimum_standing
     * @return double
     */
    public function getMinimumStanding()
    {
        return $this->container['minimum_standing'];
    }

    /**
     * Sets minimum_standing
     * @param double $minimum_standing minimum_standing number
     * @return $this
     */
    public function setMinimumStanding($minimum_standing)
    {
        $this->container['minimum_standing'] = $minimum_standing;

        return $this;
    }

    /**
     * Gets service_name
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     * @param string $service_name service_name string
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $allowed_values = array('Bounty Missions', 'Assassination Missions', 'Courier Missions', 'Interbus', 'Reprocessing Plant', 'Refinery', 'Market', 'Black Market', 'Stock Exchange', 'Cloning', 'Surgery', 'DNA Therapy', 'Repair Facilities', 'Factory', 'Laboratory', 'Gambling', 'Fitting', 'Paintshop', 'News', 'Storage', 'Insurance', 'Docking', 'Office Rental', 'Jump Clone Facility', 'Loyalty Point Store', 'Navy Offices', 'Security Office');
        if (!in_array($service_name, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'service_name', must be one of 'Bounty Missions', 'Assassination Missions', 'Courier Missions', 'Interbus', 'Reprocessing Plant', 'Refinery', 'Market', 'Black Market', 'Stock Exchange', 'Cloning', 'Surgery', 'DNA Therapy', 'Repair Facilities', 'Factory', 'Laboratory', 'Gambling', 'Fitting', 'Paintshop', 'News', 'Storage', 'Insurance', 'Docking', 'Office Rental', 'Jump Clone Facility', 'Loyalty Point Store', 'Navy Offices', 'Security Office'");
        }
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets surcharge_per_bad_standing
     * @return double
     */
    public function getSurchargePerBadStanding()
    {
        return $this->container['surcharge_per_bad_standing'];
    }

    /**
     * Sets surcharge_per_bad_standing
     * @param double $surcharge_per_bad_standing surcharge_per_bad_standing number
     * @return $this
     */
    public function setSurchargePerBadStanding($surcharge_per_bad_standing)
    {
        $this->container['surcharge_per_bad_standing'] = $surcharge_per_bad_standing;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



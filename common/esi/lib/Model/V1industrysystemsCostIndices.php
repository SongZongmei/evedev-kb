<?php
/**
 * V1industrysystemsCostIndices
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
 * OpenAPI spec version: 0.7.5
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
 * V1industrysystemsCostIndices Class Doc Comment
 *
 * @category    Class */
 // @description cost_indice object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1industrysystemsCostIndices implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1industrysystems_cost_indices';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'activity' => 'string',
        'cost_index' => 'float'
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
        'activity' => 'activity',
        'cost_index' => 'cost_index'
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
        'activity' => 'setActivity',
        'cost_index' => 'setCostIndex'
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
        'activity' => 'getActivity',
        'cost_index' => 'getCostIndex'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ACTIVITY_COPYING = 'copying';
    const ACTIVITY_DUPLICATING = 'duplicating';
    const ACTIVITY_INVENTION = 'invention';
    const ACTIVITY_MANUFACTURING = 'manufacturing';
    const ACTIVITY_NONE = 'none';
    const ACTIVITY_REACTION = 'reaction';
    const ACTIVITY_RESEARCHING_MATERIAL_EFFICIENCY = 'researching_material_efficiency';
    const ACTIVITY_RESEARCHING_TECHNOLOGY = 'researching_technology';
    const ACTIVITY_RESEARCHING_TIME_EFFICIENCY = 'researching_time_efficiency';
    const ACTIVITY_REVERSE_ENGINEERING = 'reverse_engineering';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActivityAllowableValues()
    {
        return [
            self::ACTIVITY_COPYING,
            self::ACTIVITY_DUPLICATING,
            self::ACTIVITY_INVENTION,
            self::ACTIVITY_MANUFACTURING,
            self::ACTIVITY_NONE,
            self::ACTIVITY_REACTION,
            self::ACTIVITY_RESEARCHING_MATERIAL_EFFICIENCY,
            self::ACTIVITY_RESEARCHING_TECHNOLOGY,
            self::ACTIVITY_RESEARCHING_TIME_EFFICIENCY,
            self::ACTIVITY_REVERSE_ENGINEERING,
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
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['cost_index'] = isset($data['cost_index']) ? $data['cost_index'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['activity'] === null) {
            $invalid_properties[] = "'activity' can't be null";
        }
        $allowed_values = array("copying", "duplicating", "invention", "manufacturing", "none", "reaction", "researching_material_efficiency", "researching_technology", "researching_time_efficiency", "reverse_engineering");
        if (!in_array($this->container['activity'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'activity', must be one of #{allowed_values}.";
        }

        if ($this->container['cost_index'] === null) {
            $invalid_properties[] = "'cost_index' can't be null";
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
        if ($this->container['activity'] === null) {
            return false;
        }
        $allowed_values = array("copying", "duplicating", "invention", "manufacturing", "none", "reaction", "researching_material_efficiency", "researching_technology", "researching_time_efficiency", "reverse_engineering");
        if (!in_array($this->container['activity'], $allowed_values)) {
            return false;
        }
        if ($this->container['cost_index'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets activity
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     * @param string $activity activity string
     * @return $this
     */
    public function setActivity($activity)
    {
        $allowed_values = array('copying', 'duplicating', 'invention', 'manufacturing', 'none', 'reaction', 'researching_material_efficiency', 'researching_technology', 'researching_time_efficiency', 'reverse_engineering');
        if (!in_array($activity, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'activity', must be one of 'copying', 'duplicating', 'invention', 'manufacturing', 'none', 'reaction', 'researching_material_efficiency', 'researching_technology', 'researching_time_efficiency', 'reverse_engineering'");
        }
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets cost_index
     * @return float
     */
    public function getCostIndex()
    {
        return $this->container['cost_index'];
    }

    /**
     * Sets cost_index
     * @param float $cost_index cost_index number
     * @return $this
     */
    public function setCostIndex($cost_index)
    {
        $this->container['cost_index'] = $cost_index;

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


<?php
/**
 * GetSovereigntyStructures200Ok
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
 * OpenAPI spec version: 0.8.6
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
 * GetSovereigntyStructures200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetSovereigntyStructures200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_sovereignty_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'alliance_id' => 'int',
        'solar_system_id' => 'int',
        'structure_id' => 'int',
        'structure_type_id' => 'int',
        'vulnerability_occupancy_level' => 'float',
        'vulnerable_end_time' => '\DateTime',
        'vulnerable_start_time' => '\DateTime'
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
        'alliance_id' => 'alliance_id',
        'solar_system_id' => 'solar_system_id',
        'structure_id' => 'structure_id',
        'structure_type_id' => 'structure_type_id',
        'vulnerability_occupancy_level' => 'vulnerability_occupancy_level',
        'vulnerable_end_time' => 'vulnerable_end_time',
        'vulnerable_start_time' => 'vulnerable_start_time'
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
        'alliance_id' => 'setAllianceId',
        'solar_system_id' => 'setSolarSystemId',
        'structure_id' => 'setStructureId',
        'structure_type_id' => 'setStructureTypeId',
        'vulnerability_occupancy_level' => 'setVulnerabilityOccupancyLevel',
        'vulnerable_end_time' => 'setVulnerableEndTime',
        'vulnerable_start_time' => 'setVulnerableStartTime'
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
        'alliance_id' => 'getAllianceId',
        'solar_system_id' => 'getSolarSystemId',
        'structure_id' => 'getStructureId',
        'structure_type_id' => 'getStructureTypeId',
        'vulnerability_occupancy_level' => 'getVulnerabilityOccupancyLevel',
        'vulnerable_end_time' => 'getVulnerableEndTime',
        'vulnerable_start_time' => 'getVulnerableStartTime'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['alliance_id'] = isset($data['alliance_id']) ? $data['alliance_id'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
        $this->container['structure_type_id'] = isset($data['structure_type_id']) ? $data['structure_type_id'] : null;
        $this->container['vulnerability_occupancy_level'] = isset($data['vulnerability_occupancy_level']) ? $data['vulnerability_occupancy_level'] : null;
        $this->container['vulnerable_end_time'] = isset($data['vulnerable_end_time']) ? $data['vulnerable_end_time'] : null;
        $this->container['vulnerable_start_time'] = isset($data['vulnerable_start_time']) ? $data['vulnerable_start_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['alliance_id'] === null) {
            $invalid_properties[] = "'alliance_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalid_properties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalid_properties[] = "'structure_id' can't be null";
        }
        if ($this->container['structure_type_id'] === null) {
            $invalid_properties[] = "'structure_type_id' can't be null";
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
        if ($this->container['alliance_id'] === null) {
            return false;
        }
        if ($this->container['solar_system_id'] === null) {
            return false;
        }
        if ($this->container['structure_id'] === null) {
            return false;
        }
        if ($this->container['structure_type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alliance_id
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     * @param int $alliance_id The alliance that owns the structure.
     * @return $this
     */
    public function setAllianceId($alliance_id)
    {
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets solar_system_id
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     * @param int $solar_system_id Solar system in which the structure is located.
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets structure_id
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     * @param int $structure_id Unique item ID for this structure.
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

        return $this;
    }

    /**
     * Gets structure_type_id
     * @return int
     */
    public function getStructureTypeId()
    {
        return $this->container['structure_type_id'];
    }

    /**
     * Sets structure_type_id
     * @param int $structure_type_id A reference to the type of structure this is.
     * @return $this
     */
    public function setStructureTypeId($structure_type_id)
    {
        $this->container['structure_type_id'] = $structure_type_id;

        return $this;
    }

    /**
     * Gets vulnerability_occupancy_level
     * @return float
     */
    public function getVulnerabilityOccupancyLevel()
    {
        return $this->container['vulnerability_occupancy_level'];
    }

    /**
     * Sets vulnerability_occupancy_level
     * @param float $vulnerability_occupancy_level The occupancy level for the next or current vulnerability window. This takes into account all development indexes and capital system bonuses. Also known as Activity Defense Multiplier from in the client. It increases the time that attackers must spend using their entosis links on the structure.
     * @return $this
     */
    public function setVulnerabilityOccupancyLevel($vulnerability_occupancy_level)
    {
        $this->container['vulnerability_occupancy_level'] = $vulnerability_occupancy_level;

        return $this;
    }

    /**
     * Gets vulnerable_end_time
     * @return \DateTime
     */
    public function getVulnerableEndTime()
    {
        return $this->container['vulnerable_end_time'];
    }

    /**
     * Sets vulnerable_end_time
     * @param \DateTime $vulnerable_end_time The time at which the next or current vulnerability window ends. At the end of a vulnerability window the next window is recalculated and locked in along with the vulnerabilityOccupancyLevel. If the structure is not in 100% entosis control of the defender, it will go in to 'overtime' and stay vulnerable for as long as that situation persists. Only once the defenders have 100% entosis control and has the vulnerableEndTime passed does the vulnerability interval expire and a new one is calculated.
     * @return $this
     */
    public function setVulnerableEndTime($vulnerable_end_time)
    {
        $this->container['vulnerable_end_time'] = $vulnerable_end_time;

        return $this;
    }

    /**
     * Gets vulnerable_start_time
     * @return \DateTime
     */
    public function getVulnerableStartTime()
    {
        return $this->container['vulnerable_start_time'];
    }

    /**
     * Sets vulnerable_start_time
     * @param \DateTime $vulnerable_start_time The next time at which the structure will become vulnerable. Or the start time of the current window if current time is between this and vulnerableEndTime.
     * @return $this
     */
    public function setVulnerableStartTime($vulnerable_start_time)
    {
        $this->container['vulnerable_start_time'] = $vulnerable_start_time;

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


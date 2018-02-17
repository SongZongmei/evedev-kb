<?php
/**
 * GetSovereigntyCampaigns200Ok
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
 * GetSovereigntyCampaigns200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetSovereigntyCampaigns200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_sovereignty_campaigns_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'campaign_id' => 'int',
        'structure_id' => 'int',
        'solar_system_id' => 'int',
        'constellation_id' => 'int',
        'event_type' => 'string',
        'start_time' => '\DateTime',
        'defender_id' => 'int',
        'defender_score' => 'float',
        'attackers_score' => 'float',
        'participants' => '\Swagger\Client\Model\V1sovereigntycampaignsParticipants[]'
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
        'campaign_id' => 'campaign_id',
        'structure_id' => 'structure_id',
        'solar_system_id' => 'solar_system_id',
        'constellation_id' => 'constellation_id',
        'event_type' => 'event_type',
        'start_time' => 'start_time',
        'defender_id' => 'defender_id',
        'defender_score' => 'defender_score',
        'attackers_score' => 'attackers_score',
        'participants' => 'participants'
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
        'campaign_id' => 'setCampaignId',
        'structure_id' => 'setStructureId',
        'solar_system_id' => 'setSolarSystemId',
        'constellation_id' => 'setConstellationId',
        'event_type' => 'setEventType',
        'start_time' => 'setStartTime',
        'defender_id' => 'setDefenderId',
        'defender_score' => 'setDefenderScore',
        'attackers_score' => 'setAttackersScore',
        'participants' => 'setParticipants'
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
        'campaign_id' => 'getCampaignId',
        'structure_id' => 'getStructureId',
        'solar_system_id' => 'getSolarSystemId',
        'constellation_id' => 'getConstellationId',
        'event_type' => 'getEventType',
        'start_time' => 'getStartTime',
        'defender_id' => 'getDefenderId',
        'defender_score' => 'getDefenderScore',
        'attackers_score' => 'getAttackersScore',
        'participants' => 'getParticipants'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const EVENT_TYPE_TCU_DEFENSE = 'tcu_defense';
    const EVENT_TYPE_IHUB_DEFENSE = 'ihub_defense';
    const EVENT_TYPE_STATION_DEFENSE = 'station_defense';
    const EVENT_TYPE_STATION_FREEPORT = 'station_freeport';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_TCU_DEFENSE,
            self::EVENT_TYPE_IHUB_DEFENSE,
            self::EVENT_TYPE_STATION_DEFENSE,
            self::EVENT_TYPE_STATION_FREEPORT,
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
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['constellation_id'] = isset($data['constellation_id']) ? $data['constellation_id'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['defender_id'] = isset($data['defender_id']) ? $data['defender_id'] : null;
        $this->container['defender_score'] = isset($data['defender_score']) ? $data['defender_score'] : null;
        $this->container['attackers_score'] = isset($data['attackers_score']) ? $data['attackers_score'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['campaign_id'] === null) {
            $invalid_properties[] = "'campaign_id' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalid_properties[] = "'structure_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalid_properties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['constellation_id'] === null) {
            $invalid_properties[] = "'constellation_id' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalid_properties[] = "'event_type' can't be null";
        }
        $allowed_values = array("tcu_defense", "ihub_defense", "station_defense", "station_freeport");
        if (!in_array($this->container['event_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'event_type', must be one of #{allowed_values}.";
        }

        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
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
        if ($this->container['campaign_id'] === null) {
            return false;
        }
        if ($this->container['structure_id'] === null) {
            return false;
        }
        if ($this->container['solar_system_id'] === null) {
            return false;
        }
        if ($this->container['constellation_id'] === null) {
            return false;
        }
        if ($this->container['event_type'] === null) {
            return false;
        }
        $allowed_values = array("tcu_defense", "ihub_defense", "station_defense", "station_freeport");
        if (!in_array($this->container['event_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['start_time'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets campaign_id
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     * @param int $campaign_id Unique ID for this campaign.
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

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
     * @param int $structure_id The structure item ID that is related to this campaign.
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

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
     * @param int $solar_system_id The solar system the structure is located in.
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets constellation_id
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     * @param int $constellation_id The constellation in which the campaign will take place.
     * @return $this
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     * @param string $event_type Type of event this campaign is for. tcu_defense, ihub_defense and station_defense are referred to as \"Defense Events\", station_freeport as \"Freeport Events\".
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowed_values = array('tcu_defense', 'ihub_defense', 'station_defense', 'station_freeport');
        if (!in_array($event_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'event_type', must be one of 'tcu_defense', 'ihub_defense', 'station_defense', 'station_freeport'");
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time Time the event is scheduled to start.
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets defender_id
     * @return int
     */
    public function getDefenderId()
    {
        return $this->container['defender_id'];
    }

    /**
     * Sets defender_id
     * @param int $defender_id Defending alliance, only present in Defense Events
     * @return $this
     */
    public function setDefenderId($defender_id)
    {
        $this->container['defender_id'] = $defender_id;

        return $this;
    }

    /**
     * Gets defender_score
     * @return float
     */
    public function getDefenderScore()
    {
        return $this->container['defender_score'];
    }

    /**
     * Sets defender_score
     * @param float $defender_score Score for the defending alliance, only present in Defense Events.
     * @return $this
     */
    public function setDefenderScore($defender_score)
    {
        $this->container['defender_score'] = $defender_score;

        return $this;
    }

    /**
     * Gets attackers_score
     * @return float
     */
    public function getAttackersScore()
    {
        return $this->container['attackers_score'];
    }

    /**
     * Sets attackers_score
     * @param float $attackers_score Score for all attacking parties, only present in Defense Events.
     * @return $this
     */
    public function setAttackersScore($attackers_score)
    {
        $this->container['attackers_score'] = $attackers_score;

        return $this;
    }

    /**
     * Gets participants
     * @return \Swagger\Client\Model\V1sovereigntycampaignsParticipants[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     * @param \Swagger\Client\Model\V1sovereigntycampaignsParticipants[] $participants Alliance participating and their respective scores, only present in Freeport Events.
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

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


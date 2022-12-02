<?php
/**
 * EcedoERPCRMInterfaceApiMeansOfProductionConnection
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ecedo.ERP.UI.Web Core
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1-core
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EcedoERPCRMInterfaceApiMeansOfProductionConnection Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiMeansOfProductionConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.MeansOfProductionConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'means_of_production_connection_id' => 'string',
        'means_of_production_id' => 'string',
        'balance_responsible_market_party_id' => 'string',
        'ean' => 'string',
        'expected_year_production' => 'int',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'description' => 'string',
        'entity_properties' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEntityProperty[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'means_of_production_connection_id' => null,
        'means_of_production_id' => null,
        'balance_responsible_market_party_id' => null,
        'ean' => null,
        'expected_year_production' => 'int32',
        'start_date' => 'date',
        'end_date' => 'date',
        'description' => null,
        'entity_properties' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'means_of_production_connection_id' => 'MeansOfProductionConnectionId',
        'means_of_production_id' => 'MeansOfProductionId',
        'balance_responsible_market_party_id' => 'BalanceResponsibleMarketPartyId',
        'ean' => 'EAN',
        'expected_year_production' => 'ExpectedYearProduction',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'description' => 'Description',
        'entity_properties' => 'EntityProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'means_of_production_connection_id' => 'setMeansOfProductionConnectionId',
        'means_of_production_id' => 'setMeansOfProductionId',
        'balance_responsible_market_party_id' => 'setBalanceResponsibleMarketPartyId',
        'ean' => 'setEan',
        'expected_year_production' => 'setExpectedYearProduction',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'description' => 'setDescription',
        'entity_properties' => 'setEntityProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'means_of_production_connection_id' => 'getMeansOfProductionConnectionId',
        'means_of_production_id' => 'getMeansOfProductionId',
        'balance_responsible_market_party_id' => 'getBalanceResponsibleMarketPartyId',
        'ean' => 'getEan',
        'expected_year_production' => 'getExpectedYearProduction',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'description' => 'getDescription',
        'entity_properties' => 'getEntityProperties'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['means_of_production_connection_id'] = isset($data['means_of_production_connection_id']) ? $data['means_of_production_connection_id'] : null;
        $this->container['means_of_production_id'] = isset($data['means_of_production_id']) ? $data['means_of_production_id'] : null;
        $this->container['balance_responsible_market_party_id'] = isset($data['balance_responsible_market_party_id']) ? $data['balance_responsible_market_party_id'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['expected_year_production'] = isset($data['expected_year_production']) ? $data['expected_year_production'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['entity_properties'] = isset($data['entity_properties']) ? $data['entity_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets means_of_production_connection_id
     *
     * @return string
     */
    public function getMeansOfProductionConnectionId()
    {
        return $this->container['means_of_production_connection_id'];
    }

    /**
     * Sets means_of_production_connection_id
     *
     * @param string $means_of_production_connection_id means_of_production_connection_id
     *
     * @return $this
     */
    public function setMeansOfProductionConnectionId($means_of_production_connection_id)
    {
        $this->container['means_of_production_connection_id'] = $means_of_production_connection_id;

        return $this;
    }

    /**
     * Gets means_of_production_id
     *
     * @return string
     */
    public function getMeansOfProductionId()
    {
        return $this->container['means_of_production_id'];
    }

    /**
     * Sets means_of_production_id
     *
     * @param string $means_of_production_id means_of_production_id
     *
     * @return $this
     */
    public function setMeansOfProductionId($means_of_production_id)
    {
        $this->container['means_of_production_id'] = $means_of_production_id;

        return $this;
    }

    /**
     * Gets balance_responsible_market_party_id
     *
     * @return string
     */
    public function getBalanceResponsibleMarketPartyId()
    {
        return $this->container['balance_responsible_market_party_id'];
    }

    /**
     * Sets balance_responsible_market_party_id
     *
     * @param string $balance_responsible_market_party_id balance_responsible_market_party_id
     *
     * @return $this
     */
    public function setBalanceResponsibleMarketPartyId($balance_responsible_market_party_id)
    {
        $this->container['balance_responsible_market_party_id'] = $balance_responsible_market_party_id;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets expected_year_production
     *
     * @return int
     */
    public function getExpectedYearProduction()
    {
        return $this->container['expected_year_production'];
    }

    /**
     * Sets expected_year_production
     *
     * @param int $expected_year_production expected_year_production
     *
     * @return $this
     */
    public function setExpectedYearProduction($expected_year_production)
    {
        $this->container['expected_year_production'] = $expected_year_production;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets entity_properties
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEntityProperty[]
     */
    public function getEntityProperties()
    {
        return $this->container['entity_properties'];
    }

    /**
     * Sets entity_properties
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEntityProperty[] $entity_properties entity_properties
     *
     * @return $this
     */
    public function setEntityProperties($entity_properties)
    {
        $this->container['entity_properties'] = $entity_properties;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
/**
 * EcedoERPCRMInterfaceApiProductUnitUsagePostData
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
 * EcedoERPCRMInterfaceApiProductUnitUsagePostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiProductUnitUsagePostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ProductUnitUsagePostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reading_date' => '\DateTime',
        'usages' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiProductUnitUsage[]',
        'start_period' => '\DateTime',
        'end_period' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reading_date' => 'date',
        'usages' => null,
        'start_period' => 'date-time',
        'end_period' => 'date-time'
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
        'reading_date' => 'ReadingDate',
        'usages' => 'Usages',
        'start_period' => 'StartPeriod',
        'end_period' => 'EndPeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reading_date' => 'setReadingDate',
        'usages' => 'setUsages',
        'start_period' => 'setStartPeriod',
        'end_period' => 'setEndPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reading_date' => 'getReadingDate',
        'usages' => 'getUsages',
        'start_period' => 'getStartPeriod',
        'end_period' => 'getEndPeriod'
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
        $this->container['reading_date'] = isset($data['reading_date']) ? $data['reading_date'] : null;
        $this->container['usages'] = isset($data['usages']) ? $data['usages'] : null;
        $this->container['start_period'] = isset($data['start_period']) ? $data['start_period'] : null;
        $this->container['end_period'] = isset($data['end_period']) ? $data['end_period'] : null;
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
     * Gets reading_date
     *
     * @return \DateTime
     */
    public function getReadingDate()
    {
        return $this->container['reading_date'];
    }

    /**
     * Sets reading_date
     *
     * @param \DateTime $reading_date reading_date
     *
     * @return $this
     */
    public function setReadingDate($reading_date)
    {
        $this->container['reading_date'] = $reading_date;

        return $this;
    }

    /**
     * Gets usages
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiProductUnitUsage[]
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiProductUnitUsage[] $usages usages
     *
     * @return $this
     */
    public function setUsages($usages)
    {
        $this->container['usages'] = $usages;

        return $this;
    }

    /**
     * Gets start_period
     *
     * @return \DateTime
     */
    public function getStartPeriod()
    {
        return $this->container['start_period'];
    }

    /**
     * Sets start_period
     *
     * @param \DateTime $start_period start_period
     *
     * @return $this
     */
    public function setStartPeriod($start_period)
    {
        $this->container['start_period'] = $start_period;

        return $this;
    }

    /**
     * Gets end_period
     *
     * @return \DateTime
     */
    public function getEndPeriod()
    {
        return $this->container['end_period'];
    }

    /**
     * Sets end_period
     *
     * @param \DateTime $end_period end_period
     *
     * @return $this
     */
    public function setEndPeriod($end_period)
    {
        $this->container['end_period'] = $end_period;

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



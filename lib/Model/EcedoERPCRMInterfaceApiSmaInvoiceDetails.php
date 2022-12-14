<?php
/**
 * EcedoERPCRMInterfaceApiSmaInvoiceDetails
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
 * EcedoERPCRMInterfaceApiSmaInvoiceDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiSmaInvoiceDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.SmaInvoiceDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gas' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]',
        'electricity' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]',
        'wind' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]',
        'solar' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gas' => null,
        'electricity' => null,
        'wind' => null,
        'solar' => null
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
        'gas' => 'Gas',
        'electricity' => 'Electricity',
        'wind' => 'Wind',
        'solar' => 'Solar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gas' => 'setGas',
        'electricity' => 'setElectricity',
        'wind' => 'setWind',
        'solar' => 'setSolar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gas' => 'getGas',
        'electricity' => 'getElectricity',
        'wind' => 'getWind',
        'solar' => 'getSolar'
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
        $this->container['gas'] = isset($data['gas']) ? $data['gas'] : null;
        $this->container['electricity'] = isset($data['electricity']) ? $data['electricity'] : null;
        $this->container['wind'] = isset($data['wind']) ? $data['wind'] : null;
        $this->container['solar'] = isset($data['solar']) ? $data['solar'] : null;
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
     * Gets gas
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]
     */
    public function getGas()
    {
        return $this->container['gas'];
    }

    /**
     * Sets gas
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[] $gas gas
     *
     * @return $this
     */
    public function setGas($gas)
    {
        $this->container['gas'] = $gas;

        return $this;
    }

    /**
     * Gets electricity
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]
     */
    public function getElectricity()
    {
        return $this->container['electricity'];
    }

    /**
     * Sets electricity
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[] $electricity electricity
     *
     * @return $this
     */
    public function setElectricity($electricity)
    {
        $this->container['electricity'] = $electricity;

        return $this;
    }

    /**
     * Gets wind
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]
     */
    public function getWind()
    {
        return $this->container['wind'];
    }

    /**
     * Sets wind
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[] $wind wind
     *
     * @return $this
     */
    public function setWind($wind)
    {
        $this->container['wind'] = $wind;

        return $this;
    }

    /**
     * Gets solar
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[]
     */
    public function getSolar()
    {
        return $this->container['solar'];
    }

    /**
     * Sets solar
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiUsageCalculationRow[] $solar solar
     *
     * @return $this
     */
    public function setSolar($solar)
    {
        $this->container['solar'] = $solar;

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



<?php
/**
 * EcedoERPCRMInterfaceApiProductUnitUsage
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
 * EcedoERPCRMInterfaceApiProductUnitUsage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiProductUnitUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ProductUnitUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'usage' => 'double',
        'unit' => 'string',
        'usage_type' => 'string',
        'fixed_price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'usage' => 'double',
        'unit' => null,
        'usage_type' => null,
        'fixed_price' => 'double'
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
        'usage' => 'Usage',
        'unit' => 'Unit',
        'usage_type' => 'UsageType',
        'fixed_price' => 'FixedPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'usage' => 'setUsage',
        'unit' => 'setUnit',
        'usage_type' => 'setUsageType',
        'fixed_price' => 'setFixedPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'usage' => 'getUsage',
        'unit' => 'getUnit',
        'usage_type' => 'getUsageType',
        'fixed_price' => 'getFixedPrice'
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

    const UNIT_K_WH = 'kWh';
    const UNIT_MWH = 'MWh';
    const UNIT_NETWORK = 'Network';
    const UNIT_WIND_SHARE = 'WindShare';
    const UNIT_ONE_OFF = 'OneOff';
    const UNIT_WH = 'Wh';
    const UNIT_CHARGE_SESSION = 'ChargeSession';
    const USAGE_TYPE_WIND_GENERATION_SHARE = 'WindGenerationShare';
    const USAGE_TYPE_CHARGE_SESSION = 'ChargeSession';
    const USAGE_TYPE_CHARGE_SESSION_NETWORK = 'ChargeSessionNetwork';
    const USAGE_TYPE_PURCHASE_PRODUCT = 'PurchaseProduct';
    const USAGE_TYPE_WIND_PEAK = 'WindPeak';
    const USAGE_TYPE_WIND_OFF_PEAK = 'WindOffPeak';
    const USAGE_TYPE_WIND_BASE = 'WindBase';
    const USAGE_TYPE_SOLAR_GENERATION = 'SolarGeneration';
    const USAGE_TYPE_SOLAR_PEAK = 'SolarPeak';
    const USAGE_TYPE_SOLAR_OFF_PEAK = 'SolarOffPeak';
    const USAGE_TYPE_SOLAR_BASE = 'SolarBase';
    const USAGE_TYPE_WIND_GENERATION_SHARE_APX_HOUR_PRICE = 'WindGenerationShareApxHourPrice';
    const USAGE_TYPE_WIND_MEAN_DAY_PRICE = 'WindMeanDayPrice';
    const USAGE_TYPE_WIND_MEAN_MONTH_PRICE = 'WindMeanMonthPrice';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_K_WH,
            self::UNIT_MWH,
            self::UNIT_NETWORK,
            self::UNIT_WIND_SHARE,
            self::UNIT_ONE_OFF,
            self::UNIT_WH,
            self::UNIT_CHARGE_SESSION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsageTypeAllowableValues()
    {
        return [
            self::USAGE_TYPE_WIND_GENERATION_SHARE,
            self::USAGE_TYPE_CHARGE_SESSION,
            self::USAGE_TYPE_CHARGE_SESSION_NETWORK,
            self::USAGE_TYPE_PURCHASE_PRODUCT,
            self::USAGE_TYPE_WIND_PEAK,
            self::USAGE_TYPE_WIND_OFF_PEAK,
            self::USAGE_TYPE_WIND_BASE,
            self::USAGE_TYPE_SOLAR_GENERATION,
            self::USAGE_TYPE_SOLAR_PEAK,
            self::USAGE_TYPE_SOLAR_OFF_PEAK,
            self::USAGE_TYPE_SOLAR_BASE,
            self::USAGE_TYPE_WIND_GENERATION_SHARE_APX_HOUR_PRICE,
            self::USAGE_TYPE_WIND_MEAN_DAY_PRICE,
            self::USAGE_TYPE_WIND_MEAN_MONTH_PRICE,
        ];
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
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['usage_type'] = isset($data['usage_type']) ? $data['usage_type'] : null;
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($this->container['usage_type']) && !in_array($this->container['usage_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'usage_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets usage
     *
     * @return double
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param double $usage usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($unit) && !in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets usage_type
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->container['usage_type'];
    }

    /**
     * Sets usage_type
     *
     * @param string $usage_type usage_type
     *
     * @return $this
     */
    public function setUsageType($usage_type)
    {
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($usage_type) && !in_array($usage_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'usage_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usage_type'] = $usage_type;

        return $this;
    }

    /**
     * Gets fixed_price
     *
     * @return double
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     *
     * @param double $fixed_price fixed_price
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

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



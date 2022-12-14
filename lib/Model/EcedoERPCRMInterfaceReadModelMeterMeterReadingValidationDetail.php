<?php
/**
 * EcedoERPCRMInterfaceReadModelMeterMeterReadingValidationDetail
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
 * EcedoERPCRMInterfaceReadModelMeterMeterReadingValidationDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceReadModelMeterMeterReadingValidationDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.ReadModel.Meter.MeterReading.ValidationDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_valid' => 'bool',
        'error_type' => 'string',
        'error_type_localized' => 'string',
        'error_message' => 'string',
        'tariff_zone' => 'string',
        'tariff_zone_localized' => 'string',
        'dial' => 'string',
        'min_allowed_value' => 'int',
        'max_allowed_value' => 'int',
        'provided_value' => 'int',
        'comparison' => 'string',
        'comparison_localized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_valid' => null,
        'error_type' => null,
        'error_type_localized' => null,
        'error_message' => null,
        'tariff_zone' => null,
        'tariff_zone_localized' => null,
        'dial' => null,
        'min_allowed_value' => 'int32',
        'max_allowed_value' => 'int32',
        'provided_value' => 'int32',
        'comparison' => null,
        'comparison_localized' => null
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
        'is_valid' => 'IsValid',
        'error_type' => 'ErrorType',
        'error_type_localized' => 'ErrorTypeLocalized',
        'error_message' => 'ErrorMessage',
        'tariff_zone' => 'TariffZone',
        'tariff_zone_localized' => 'TariffZoneLocalized',
        'dial' => 'Dial',
        'min_allowed_value' => 'MinAllowedValue',
        'max_allowed_value' => 'MaxAllowedValue',
        'provided_value' => 'ProvidedValue',
        'comparison' => 'Comparison',
        'comparison_localized' => 'ComparisonLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_valid' => 'setIsValid',
        'error_type' => 'setErrorType',
        'error_type_localized' => 'setErrorTypeLocalized',
        'error_message' => 'setErrorMessage',
        'tariff_zone' => 'setTariffZone',
        'tariff_zone_localized' => 'setTariffZoneLocalized',
        'dial' => 'setDial',
        'min_allowed_value' => 'setMinAllowedValue',
        'max_allowed_value' => 'setMaxAllowedValue',
        'provided_value' => 'setProvidedValue',
        'comparison' => 'setComparison',
        'comparison_localized' => 'setComparisonLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_valid' => 'getIsValid',
        'error_type' => 'getErrorType',
        'error_type_localized' => 'getErrorTypeLocalized',
        'error_message' => 'getErrorMessage',
        'tariff_zone' => 'getTariffZone',
        'tariff_zone_localized' => 'getTariffZoneLocalized',
        'dial' => 'getDial',
        'min_allowed_value' => 'getMinAllowedValue',
        'max_allowed_value' => 'getMaxAllowedValue',
        'provided_value' => 'getProvidedValue',
        'comparison' => 'getComparison',
        'comparison_localized' => 'getComparisonLocalized'
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
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['error_type'] = isset($data['error_type']) ? $data['error_type'] : null;
        $this->container['error_type_localized'] = isset($data['error_type_localized']) ? $data['error_type_localized'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['tariff_zone'] = isset($data['tariff_zone']) ? $data['tariff_zone'] : null;
        $this->container['tariff_zone_localized'] = isset($data['tariff_zone_localized']) ? $data['tariff_zone_localized'] : null;
        $this->container['dial'] = isset($data['dial']) ? $data['dial'] : null;
        $this->container['min_allowed_value'] = isset($data['min_allowed_value']) ? $data['min_allowed_value'] : null;
        $this->container['max_allowed_value'] = isset($data['max_allowed_value']) ? $data['max_allowed_value'] : null;
        $this->container['provided_value'] = isset($data['provided_value']) ? $data['provided_value'] : null;
        $this->container['comparison'] = isset($data['comparison']) ? $data['comparison'] : null;
        $this->container['comparison_localized'] = isset($data['comparison_localized']) ? $data['comparison_localized'] : null;
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
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool $is_valid is_valid
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets error_type
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->container['error_type'];
    }

    /**
     * Sets error_type
     *
     * @param string $error_type error_type
     *
     * @return $this
     */
    public function setErrorType($error_type)
    {
        $this->container['error_type'] = $error_type;

        return $this;
    }

    /**
     * Gets error_type_localized
     *
     * @return string
     */
    public function getErrorTypeLocalized()
    {
        return $this->container['error_type_localized'];
    }

    /**
     * Sets error_type_localized
     *
     * @param string $error_type_localized error_type_localized
     *
     * @return $this
     */
    public function setErrorTypeLocalized($error_type_localized)
    {
        $this->container['error_type_localized'] = $error_type_localized;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets tariff_zone
     *
     * @return string
     */
    public function getTariffZone()
    {
        return $this->container['tariff_zone'];
    }

    /**
     * Sets tariff_zone
     *
     * @param string $tariff_zone tariff_zone
     *
     * @return $this
     */
    public function setTariffZone($tariff_zone)
    {
        $this->container['tariff_zone'] = $tariff_zone;

        return $this;
    }

    /**
     * Gets tariff_zone_localized
     *
     * @return string
     */
    public function getTariffZoneLocalized()
    {
        return $this->container['tariff_zone_localized'];
    }

    /**
     * Sets tariff_zone_localized
     *
     * @param string $tariff_zone_localized tariff_zone_localized
     *
     * @return $this
     */
    public function setTariffZoneLocalized($tariff_zone_localized)
    {
        $this->container['tariff_zone_localized'] = $tariff_zone_localized;

        return $this;
    }

    /**
     * Gets dial
     *
     * @return string
     */
    public function getDial()
    {
        return $this->container['dial'];
    }

    /**
     * Sets dial
     *
     * @param string $dial dial
     *
     * @return $this
     */
    public function setDial($dial)
    {
        $this->container['dial'] = $dial;

        return $this;
    }

    /**
     * Gets min_allowed_value
     *
     * @return int
     */
    public function getMinAllowedValue()
    {
        return $this->container['min_allowed_value'];
    }

    /**
     * Sets min_allowed_value
     *
     * @param int $min_allowed_value min_allowed_value
     *
     * @return $this
     */
    public function setMinAllowedValue($min_allowed_value)
    {
        $this->container['min_allowed_value'] = $min_allowed_value;

        return $this;
    }

    /**
     * Gets max_allowed_value
     *
     * @return int
     */
    public function getMaxAllowedValue()
    {
        return $this->container['max_allowed_value'];
    }

    /**
     * Sets max_allowed_value
     *
     * @param int $max_allowed_value max_allowed_value
     *
     * @return $this
     */
    public function setMaxAllowedValue($max_allowed_value)
    {
        $this->container['max_allowed_value'] = $max_allowed_value;

        return $this;
    }

    /**
     * Gets provided_value
     *
     * @return int
     */
    public function getProvidedValue()
    {
        return $this->container['provided_value'];
    }

    /**
     * Sets provided_value
     *
     * @param int $provided_value provided_value
     *
     * @return $this
     */
    public function setProvidedValue($provided_value)
    {
        $this->container['provided_value'] = $provided_value;

        return $this;
    }

    /**
     * Gets comparison
     *
     * @return string
     */
    public function getComparison()
    {
        return $this->container['comparison'];
    }

    /**
     * Sets comparison
     *
     * @param string $comparison comparison
     *
     * @return $this
     */
    public function setComparison($comparison)
    {
        $this->container['comparison'] = $comparison;

        return $this;
    }

    /**
     * Gets comparison_localized
     *
     * @return string
     */
    public function getComparisonLocalized()
    {
        return $this->container['comparison_localized'];
    }

    /**
     * Sets comparison_localized
     *
     * @param string $comparison_localized comparison_localized
     *
     * @return $this
     */
    public function setComparisonLocalized($comparison_localized)
    {
        $this->container['comparison_localized'] = $comparison_localized;

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



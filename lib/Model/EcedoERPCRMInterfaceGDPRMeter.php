<?php
/**
 * EcedoERPCRMInterfaceGDPRMeter
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
 * EcedoERPCRMInterfaceGDPRMeter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceGDPRMeter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.GDPR.Meter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meter_type_localized' => 'string',
        'meter_type_code_localized' => 'string',
        'measure_unit_localized' => 'string',
        'communication_status_code_localized' => 'string',
        'meter_number' => 'string',
        'no_dials' => 'int',
        'no_digits' => 'int',
        'period_localized' => 'string',
        'factor_localized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meter_type_localized' => null,
        'meter_type_code_localized' => null,
        'measure_unit_localized' => null,
        'communication_status_code_localized' => null,
        'meter_number' => null,
        'no_dials' => 'int32',
        'no_digits' => 'int32',
        'period_localized' => null,
        'factor_localized' => null
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
        'meter_type_localized' => 'MeterTypeLocalized',
        'meter_type_code_localized' => 'MeterTypeCodeLocalized',
        'measure_unit_localized' => 'MeasureUnitLocalized',
        'communication_status_code_localized' => 'CommunicationStatusCodeLocalized',
        'meter_number' => 'MeterNumber',
        'no_dials' => 'NoDials',
        'no_digits' => 'NoDigits',
        'period_localized' => 'PeriodLocalized',
        'factor_localized' => 'FactorLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meter_type_localized' => 'setMeterTypeLocalized',
        'meter_type_code_localized' => 'setMeterTypeCodeLocalized',
        'measure_unit_localized' => 'setMeasureUnitLocalized',
        'communication_status_code_localized' => 'setCommunicationStatusCodeLocalized',
        'meter_number' => 'setMeterNumber',
        'no_dials' => 'setNoDials',
        'no_digits' => 'setNoDigits',
        'period_localized' => 'setPeriodLocalized',
        'factor_localized' => 'setFactorLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meter_type_localized' => 'getMeterTypeLocalized',
        'meter_type_code_localized' => 'getMeterTypeCodeLocalized',
        'measure_unit_localized' => 'getMeasureUnitLocalized',
        'communication_status_code_localized' => 'getCommunicationStatusCodeLocalized',
        'meter_number' => 'getMeterNumber',
        'no_dials' => 'getNoDials',
        'no_digits' => 'getNoDigits',
        'period_localized' => 'getPeriodLocalized',
        'factor_localized' => 'getFactorLocalized'
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
        $this->container['meter_type_localized'] = isset($data['meter_type_localized']) ? $data['meter_type_localized'] : null;
        $this->container['meter_type_code_localized'] = isset($data['meter_type_code_localized']) ? $data['meter_type_code_localized'] : null;
        $this->container['measure_unit_localized'] = isset($data['measure_unit_localized']) ? $data['measure_unit_localized'] : null;
        $this->container['communication_status_code_localized'] = isset($data['communication_status_code_localized']) ? $data['communication_status_code_localized'] : null;
        $this->container['meter_number'] = isset($data['meter_number']) ? $data['meter_number'] : null;
        $this->container['no_dials'] = isset($data['no_dials']) ? $data['no_dials'] : null;
        $this->container['no_digits'] = isset($data['no_digits']) ? $data['no_digits'] : null;
        $this->container['period_localized'] = isset($data['period_localized']) ? $data['period_localized'] : null;
        $this->container['factor_localized'] = isset($data['factor_localized']) ? $data['factor_localized'] : null;
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
     * Gets meter_type_localized
     *
     * @return string
     */
    public function getMeterTypeLocalized()
    {
        return $this->container['meter_type_localized'];
    }

    /**
     * Sets meter_type_localized
     *
     * @param string $meter_type_localized meter_type_localized
     *
     * @return $this
     */
    public function setMeterTypeLocalized($meter_type_localized)
    {
        $this->container['meter_type_localized'] = $meter_type_localized;

        return $this;
    }

    /**
     * Gets meter_type_code_localized
     *
     * @return string
     */
    public function getMeterTypeCodeLocalized()
    {
        return $this->container['meter_type_code_localized'];
    }

    /**
     * Sets meter_type_code_localized
     *
     * @param string $meter_type_code_localized meter_type_code_localized
     *
     * @return $this
     */
    public function setMeterTypeCodeLocalized($meter_type_code_localized)
    {
        $this->container['meter_type_code_localized'] = $meter_type_code_localized;

        return $this;
    }

    /**
     * Gets measure_unit_localized
     *
     * @return string
     */
    public function getMeasureUnitLocalized()
    {
        return $this->container['measure_unit_localized'];
    }

    /**
     * Sets measure_unit_localized
     *
     * @param string $measure_unit_localized measure_unit_localized
     *
     * @return $this
     */
    public function setMeasureUnitLocalized($measure_unit_localized)
    {
        $this->container['measure_unit_localized'] = $measure_unit_localized;

        return $this;
    }

    /**
     * Gets communication_status_code_localized
     *
     * @return string
     */
    public function getCommunicationStatusCodeLocalized()
    {
        return $this->container['communication_status_code_localized'];
    }

    /**
     * Sets communication_status_code_localized
     *
     * @param string $communication_status_code_localized communication_status_code_localized
     *
     * @return $this
     */
    public function setCommunicationStatusCodeLocalized($communication_status_code_localized)
    {
        $this->container['communication_status_code_localized'] = $communication_status_code_localized;

        return $this;
    }

    /**
     * Gets meter_number
     *
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->container['meter_number'];
    }

    /**
     * Sets meter_number
     *
     * @param string $meter_number meter_number
     *
     * @return $this
     */
    public function setMeterNumber($meter_number)
    {
        $this->container['meter_number'] = $meter_number;

        return $this;
    }

    /**
     * Gets no_dials
     *
     * @return int
     */
    public function getNoDials()
    {
        return $this->container['no_dials'];
    }

    /**
     * Sets no_dials
     *
     * @param int $no_dials no_dials
     *
     * @return $this
     */
    public function setNoDials($no_dials)
    {
        $this->container['no_dials'] = $no_dials;

        return $this;
    }

    /**
     * Gets no_digits
     *
     * @return int
     */
    public function getNoDigits()
    {
        return $this->container['no_digits'];
    }

    /**
     * Sets no_digits
     *
     * @param int $no_digits no_digits
     *
     * @return $this
     */
    public function setNoDigits($no_digits)
    {
        $this->container['no_digits'] = $no_digits;

        return $this;
    }

    /**
     * Gets period_localized
     *
     * @return string
     */
    public function getPeriodLocalized()
    {
        return $this->container['period_localized'];
    }

    /**
     * Sets period_localized
     *
     * @param string $period_localized period_localized
     *
     * @return $this
     */
    public function setPeriodLocalized($period_localized)
    {
        $this->container['period_localized'] = $period_localized;

        return $this;
    }

    /**
     * Gets factor_localized
     *
     * @return string
     */
    public function getFactorLocalized()
    {
        return $this->container['factor_localized'];
    }

    /**
     * Sets factor_localized
     *
     * @param string $factor_localized factor_localized
     *
     * @return $this
     */
    public function setFactorLocalized($factor_localized)
    {
        $this->container['factor_localized'] = $factor_localized;

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



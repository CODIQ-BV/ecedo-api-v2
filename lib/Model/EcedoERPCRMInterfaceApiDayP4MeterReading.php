<?php
/**
 * EcedoERPCRMInterfaceApiDayP4MeterReading
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
 * EcedoERPCRMInterfaceApiDayP4MeterReading Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiDayP4MeterReading implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.DayP4MeterReading';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ldn_high' => 'double',
        'ldn_low' => 'double',
        'odn_high' => 'double',
        'odn_low' => 'double',
        'reading_date' => '\DateTime',
        'measure_unit' => 'string',
        'measure_unit_localized' => 'string',
        'meter_number' => 'string',
        'ean' => 'string',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ldn_high' => 'double',
        'ldn_low' => 'double',
        'odn_high' => 'double',
        'odn_low' => 'double',
        'reading_date' => 'date-time',
        'measure_unit' => null,
        'measure_unit_localized' => null,
        'meter_number' => null,
        'ean' => null,
        'source' => null
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
        'ldn_high' => 'LDNHigh',
        'ldn_low' => 'LDNLow',
        'odn_high' => 'ODNHigh',
        'odn_low' => 'ODNLow',
        'reading_date' => 'ReadingDate',
        'measure_unit' => 'MeasureUnit',
        'measure_unit_localized' => 'MeasureUnitLocalized',
        'meter_number' => 'MeterNumber',
        'ean' => 'EAN',
        'source' => 'Source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ldn_high' => 'setLdnHigh',
        'ldn_low' => 'setLdnLow',
        'odn_high' => 'setOdnHigh',
        'odn_low' => 'setOdnLow',
        'reading_date' => 'setReadingDate',
        'measure_unit' => 'setMeasureUnit',
        'measure_unit_localized' => 'setMeasureUnitLocalized',
        'meter_number' => 'setMeterNumber',
        'ean' => 'setEan',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ldn_high' => 'getLdnHigh',
        'ldn_low' => 'getLdnLow',
        'odn_high' => 'getOdnHigh',
        'odn_low' => 'getOdnLow',
        'reading_date' => 'getReadingDate',
        'measure_unit' => 'getMeasureUnit',
        'measure_unit_localized' => 'getMeasureUnitLocalized',
        'meter_number' => 'getMeterNumber',
        'ean' => 'getEan',
        'source' => 'getSource'
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

    const SOURCE_EDSN = 'EDSN';
    const SOURCE_P1 = 'P1';
    const SOURCE_CORRECTED = 'Corrected';
    const SOURCE_P4_DAY_TO_P4_INT = 'P4DayToP4Int';
    const SOURCE_P4_METER_READING_TO_P4_INT = 'P4MeterReadingToP4Int';
    const SOURCE_METER_READING_TO_P4_INT = 'MeterReadingToP4Int';
    const SOURCE_CALCULATED = 'Calculated';
    const SOURCE_ESTIMATED = 'Estimated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_EDSN,
            self::SOURCE_P1,
            self::SOURCE_CORRECTED,
            self::SOURCE_P4_DAY_TO_P4_INT,
            self::SOURCE_P4_METER_READING_TO_P4_INT,
            self::SOURCE_METER_READING_TO_P4_INT,
            self::SOURCE_CALCULATED,
            self::SOURCE_ESTIMATED,
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
        $this->container['ldn_high'] = isset($data['ldn_high']) ? $data['ldn_high'] : null;
        $this->container['ldn_low'] = isset($data['ldn_low']) ? $data['ldn_low'] : null;
        $this->container['odn_high'] = isset($data['odn_high']) ? $data['odn_high'] : null;
        $this->container['odn_low'] = isset($data['odn_low']) ? $data['odn_low'] : null;
        $this->container['reading_date'] = isset($data['reading_date']) ? $data['reading_date'] : null;
        $this->container['measure_unit'] = isset($data['measure_unit']) ? $data['measure_unit'] : null;
        $this->container['measure_unit_localized'] = isset($data['measure_unit_localized']) ? $data['measure_unit_localized'] : null;
        $this->container['meter_number'] = isset($data['meter_number']) ? $data['meter_number'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets ldn_high
     *
     * @return double
     */
    public function getLdnHigh()
    {
        return $this->container['ldn_high'];
    }

    /**
     * Sets ldn_high
     *
     * @param double $ldn_high ldn_high
     *
     * @return $this
     */
    public function setLdnHigh($ldn_high)
    {
        $this->container['ldn_high'] = $ldn_high;

        return $this;
    }

    /**
     * Gets ldn_low
     *
     * @return double
     */
    public function getLdnLow()
    {
        return $this->container['ldn_low'];
    }

    /**
     * Sets ldn_low
     *
     * @param double $ldn_low ldn_low
     *
     * @return $this
     */
    public function setLdnLow($ldn_low)
    {
        $this->container['ldn_low'] = $ldn_low;

        return $this;
    }

    /**
     * Gets odn_high
     *
     * @return double
     */
    public function getOdnHigh()
    {
        return $this->container['odn_high'];
    }

    /**
     * Sets odn_high
     *
     * @param double $odn_high odn_high
     *
     * @return $this
     */
    public function setOdnHigh($odn_high)
    {
        $this->container['odn_high'] = $odn_high;

        return $this;
    }

    /**
     * Gets odn_low
     *
     * @return double
     */
    public function getOdnLow()
    {
        return $this->container['odn_low'];
    }

    /**
     * Sets odn_low
     *
     * @param double $odn_low odn_low
     *
     * @return $this
     */
    public function setOdnLow($odn_low)
    {
        $this->container['odn_low'] = $odn_low;

        return $this;
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
     * Gets measure_unit
     *
     * @return string
     */
    public function getMeasureUnit()
    {
        return $this->container['measure_unit'];
    }

    /**
     * Sets measure_unit
     *
     * @param string $measure_unit measure_unit
     *
     * @return $this
     */
    public function setMeasureUnit($measure_unit)
    {
        $this->container['measure_unit'] = $measure_unit;

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
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

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



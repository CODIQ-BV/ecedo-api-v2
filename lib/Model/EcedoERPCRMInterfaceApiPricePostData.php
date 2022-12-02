<?php
/**
 * EcedoERPCRMInterfaceApiPricePostData
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
 * EcedoERPCRMInterfaceApiPricePostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiPricePostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.PricePostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price' => 'double',
        'price_component_type' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'status' => 'string',
        'vat_inclusive' => 'bool',
        'gos_region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'price' => 'double',
        'price_component_type' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => null,
        'vat_inclusive' => null,
        'gos_region' => null
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
        'price' => 'Price',
        'price_component_type' => 'PriceComponentType',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'status' => 'Status',
        'vat_inclusive' => 'VatInclusive',
        'gos_region' => 'GosRegion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'price_component_type' => 'setPriceComponentType',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'vat_inclusive' => 'setVatInclusive',
        'gos_region' => 'setGosRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'price_component_type' => 'getPriceComponentType',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
        'vat_inclusive' => 'getVatInclusive',
        'gos_region' => 'getGosRegion'
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

    const STATUS_FINALIZED = 'Finalized';
    const STATUS_PROVISIONAL = 'Provisional';
    const GOS_REGION_REGION1 = 'Region1';
    const GOS_REGION_REGION2 = 'Region2';
    const GOS_REGION_REGION3 = 'Region3';
    const GOS_REGION_REGION4 = 'Region4';
    const GOS_REGION_REGION5 = 'Region5';
    const GOS_REGION_REGION6 = 'Region6';
    const GOS_REGION_REGION7 = 'Region7';
    const GOS_REGION_REGION8 = 'Region8';
    const GOS_REGION_REGION9 = 'Region9';
    const GOS_REGION_REGION10 = 'Region10';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FINALIZED,
            self::STATUS_PROVISIONAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGosRegionAllowableValues()
    {
        return [
            self::GOS_REGION_REGION1,
            self::GOS_REGION_REGION2,
            self::GOS_REGION_REGION3,
            self::GOS_REGION_REGION4,
            self::GOS_REGION_REGION5,
            self::GOS_REGION_REGION6,
            self::GOS_REGION_REGION7,
            self::GOS_REGION_REGION8,
            self::GOS_REGION_REGION9,
            self::GOS_REGION_REGION10,
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
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_component_type'] = isset($data['price_component_type']) ? $data['price_component_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vat_inclusive'] = isset($data['vat_inclusive']) ? $data['vat_inclusive'] : null;
        $this->container['gos_region'] = isset($data['gos_region']) ? $data['gos_region'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['price_component_type'] === null) {
            $invalidProperties[] = "'price_component_type' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGosRegionAllowableValues();
        if (!is_null($this->container['gos_region']) && !in_array($this->container['gos_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gos_region', must be one of '%s'",
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
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_component_type
     *
     * @return string
     */
    public function getPriceComponentType()
    {
        return $this->container['price_component_type'];
    }

    /**
     * Sets price_component_type
     *
     * @param string $price_component_type price_component_type
     *
     * @return $this
     */
    public function setPriceComponentType($price_component_type)
    {
        $this->container['price_component_type'] = $price_component_type;

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets vat_inclusive
     *
     * @return bool
     */
    public function getVatInclusive()
    {
        return $this->container['vat_inclusive'];
    }

    /**
     * Sets vat_inclusive
     *
     * @param bool $vat_inclusive vat_inclusive
     *
     * @return $this
     */
    public function setVatInclusive($vat_inclusive)
    {
        $this->container['vat_inclusive'] = $vat_inclusive;

        return $this;
    }

    /**
     * Gets gos_region
     *
     * @return string
     */
    public function getGosRegion()
    {
        return $this->container['gos_region'];
    }

    /**
     * Sets gos_region
     *
     * @param string $gos_region gos_region
     *
     * @return $this
     */
    public function setGosRegion($gos_region)
    {
        $allowedValues = $this->getGosRegionAllowableValues();
        if (!is_null($gos_region) && !in_array($gos_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gos_region', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gos_region'] = $gos_region;

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


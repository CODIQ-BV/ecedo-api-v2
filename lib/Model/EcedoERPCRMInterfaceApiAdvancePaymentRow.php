<?php
/**
 * EcedoERPCRMInterfaceApiAdvancePaymentRow
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
 * EcedoERPCRMInterfaceApiAdvancePaymentRow Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiAdvancePaymentRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.AdvancePaymentRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'product_description_localized' => 'string',
        'product_group' => 'string',
        'price_component_type' => 'string',
        'price_component_type_localized' => 'string',
        'ean' => 'string',
        'vat_percentage' => 'double',
        'range_start' => 'int',
        'range_end' => 'int',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'usage' => 'double',
        'price_unit' => 'string',
        'price_unit_localized' => 'string',
        'price' => 'double',
        'amount' => 'double',
        'vat_amount' => 'double',
        'total_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => 'uuid',
        'product_description_localized' => null,
        'product_group' => null,
        'price_component_type' => null,
        'price_component_type_localized' => null,
        'ean' => null,
        'vat_percentage' => 'double',
        'range_start' => 'int32',
        'range_end' => 'int32',
        'start_date' => 'date',
        'end_date' => 'date',
        'usage' => 'double',
        'price_unit' => null,
        'price_unit_localized' => null,
        'price' => 'double',
        'amount' => 'double',
        'vat_amount' => 'double',
        'total_amount' => 'double'
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
        'product_id' => 'ProductId',
        'product_description_localized' => 'ProductDescriptionLocalized',
        'product_group' => 'ProductGroup',
        'price_component_type' => 'PriceComponentType',
        'price_component_type_localized' => 'PriceComponentTypeLocalized',
        'ean' => 'EAN',
        'vat_percentage' => 'VatPercentage',
        'range_start' => 'RangeStart',
        'range_end' => 'RangeEnd',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'usage' => 'Usage',
        'price_unit' => 'PriceUnit',
        'price_unit_localized' => 'PriceUnitLocalized',
        'price' => 'Price',
        'amount' => 'Amount',
        'vat_amount' => 'VatAmount',
        'total_amount' => 'TotalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_description_localized' => 'setProductDescriptionLocalized',
        'product_group' => 'setProductGroup',
        'price_component_type' => 'setPriceComponentType',
        'price_component_type_localized' => 'setPriceComponentTypeLocalized',
        'ean' => 'setEan',
        'vat_percentage' => 'setVatPercentage',
        'range_start' => 'setRangeStart',
        'range_end' => 'setRangeEnd',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'usage' => 'setUsage',
        'price_unit' => 'setPriceUnit',
        'price_unit_localized' => 'setPriceUnitLocalized',
        'price' => 'setPrice',
        'amount' => 'setAmount',
        'vat_amount' => 'setVatAmount',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_description_localized' => 'getProductDescriptionLocalized',
        'product_group' => 'getProductGroup',
        'price_component_type' => 'getPriceComponentType',
        'price_component_type_localized' => 'getPriceComponentTypeLocalized',
        'ean' => 'getEan',
        'vat_percentage' => 'getVatPercentage',
        'range_start' => 'getRangeStart',
        'range_end' => 'getRangeEnd',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'usage' => 'getUsage',
        'price_unit' => 'getPriceUnit',
        'price_unit_localized' => 'getPriceUnitLocalized',
        'price' => 'getPrice',
        'amount' => 'getAmount',
        'vat_amount' => 'getVatAmount',
        'total_amount' => 'getTotalAmount'
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

    const PRICE_UNIT_YEAR = 'Year';
    const PRICE_UNIT_DAY = 'Day';
    const PRICE_UNIT_KWH = 'KWh';
    const PRICE_UNIT_M3 = 'M3';
    const PRICE_UNIT_ONE_OFF = 'OneOff';
    const PRICE_UNIT_MONTH = 'Month';
    const PRICE_UNIT_MWH = 'MWh';
    const PRICE_UNIT_WH = 'Wh';
    const PRICE_UNIT_INVOICE = 'Invoice';
    const PRICE_UNIT_PERCENTAGE = 'Percentage';
    const PRICE_UNIT_SECONDS = 'Seconds';
    const PRICE_UNIT_CHARGE_SESSION = 'ChargeSession';
    const PRICE_UNIT_CREDIT = 'Credit';
    const PRICE_UNIT_HOUR = 'Hour';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceUnitAllowableValues()
    {
        return [
            self::PRICE_UNIT_YEAR,
            self::PRICE_UNIT_DAY,
            self::PRICE_UNIT_KWH,
            self::PRICE_UNIT_M3,
            self::PRICE_UNIT_ONE_OFF,
            self::PRICE_UNIT_MONTH,
            self::PRICE_UNIT_MWH,
            self::PRICE_UNIT_WH,
            self::PRICE_UNIT_INVOICE,
            self::PRICE_UNIT_PERCENTAGE,
            self::PRICE_UNIT_SECONDS,
            self::PRICE_UNIT_CHARGE_SESSION,
            self::PRICE_UNIT_CREDIT,
            self::PRICE_UNIT_HOUR,
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_description_localized'] = isset($data['product_description_localized']) ? $data['product_description_localized'] : null;
        $this->container['product_group'] = isset($data['product_group']) ? $data['product_group'] : null;
        $this->container['price_component_type'] = isset($data['price_component_type']) ? $data['price_component_type'] : null;
        $this->container['price_component_type_localized'] = isset($data['price_component_type_localized']) ? $data['price_component_type_localized'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['vat_percentage'] = isset($data['vat_percentage']) ? $data['vat_percentage'] : null;
        $this->container['range_start'] = isset($data['range_start']) ? $data['range_start'] : null;
        $this->container['range_end'] = isset($data['range_end']) ? $data['range_end'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['price_unit'] = isset($data['price_unit']) ? $data['price_unit'] : null;
        $this->container['price_unit_localized'] = isset($data['price_unit_localized']) ? $data['price_unit_localized'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat_amount'] = isset($data['vat_amount']) ? $data['vat_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPriceUnitAllowableValues();
        if (!is_null($this->container['price_unit']) && !in_array($this->container['price_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_unit', must be one of '%s'",
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
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_description_localized
     *
     * @return string
     */
    public function getProductDescriptionLocalized()
    {
        return $this->container['product_description_localized'];
    }

    /**
     * Sets product_description_localized
     *
     * @param string $product_description_localized product_description_localized
     *
     * @return $this
     */
    public function setProductDescriptionLocalized($product_description_localized)
    {
        $this->container['product_description_localized'] = $product_description_localized;

        return $this;
    }

    /**
     * Gets product_group
     *
     * @return string
     */
    public function getProductGroup()
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group
     *
     * @param string $product_group product_group
     *
     * @return $this
     */
    public function setProductGroup($product_group)
    {
        $this->container['product_group'] = $product_group;

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
     * Gets price_component_type_localized
     *
     * @return string
     */
    public function getPriceComponentTypeLocalized()
    {
        return $this->container['price_component_type_localized'];
    }

    /**
     * Sets price_component_type_localized
     *
     * @param string $price_component_type_localized price_component_type_localized
     *
     * @return $this
     */
    public function setPriceComponentTypeLocalized($price_component_type_localized)
    {
        $this->container['price_component_type_localized'] = $price_component_type_localized;

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
     * Gets vat_percentage
     *
     * @return double
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param double $vat_percentage vat_percentage
     *
     * @return $this
     */
    public function setVatPercentage($vat_percentage)
    {
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }

    /**
     * Gets range_start
     *
     * @return int
     */
    public function getRangeStart()
    {
        return $this->container['range_start'];
    }

    /**
     * Sets range_start
     *
     * @param int $range_start range_start
     *
     * @return $this
     */
    public function setRangeStart($range_start)
    {
        $this->container['range_start'] = $range_start;

        return $this;
    }

    /**
     * Gets range_end
     *
     * @return int
     */
    public function getRangeEnd()
    {
        return $this->container['range_end'];
    }

    /**
     * Sets range_end
     *
     * @param int $range_end range_end
     *
     * @return $this
     */
    public function setRangeEnd($range_end)
    {
        $this->container['range_end'] = $range_end;

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
     * Gets price_unit
     *
     * @return string
     */
    public function getPriceUnit()
    {
        return $this->container['price_unit'];
    }

    /**
     * Sets price_unit
     *
     * @param string $price_unit price_unit
     *
     * @return $this
     */
    public function setPriceUnit($price_unit)
    {
        $allowedValues = $this->getPriceUnitAllowableValues();
        if (!is_null($price_unit) && !in_array($price_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_unit'] = $price_unit;

        return $this;
    }

    /**
     * Gets price_unit_localized
     *
     * @return string
     */
    public function getPriceUnitLocalized()
    {
        return $this->container['price_unit_localized'];
    }

    /**
     * Sets price_unit_localized
     *
     * @param string $price_unit_localized price_unit_localized
     *
     * @return $this
     */
    public function setPriceUnitLocalized($price_unit_localized)
    {
        $this->container['price_unit_localized'] = $price_unit_localized;

        return $this;
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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return double
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param double $vat_amount vat_amount
     *
     * @return $this
     */
    public function setVatAmount($vat_amount)
    {
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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



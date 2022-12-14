<?php
/**
 * EcedoERPCRMInterfaceApiCustomInvoiceRowPostData
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
 * EcedoERPCRMInterfaceApiCustomInvoiceRowPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiCustomInvoiceRowPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.CustomInvoiceRowPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_price_component_id' => 'string',
        'custom_price_component_invoice_row_description' => 'string',
        'factor' => 'double',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'product_id' => 'string',
        'usage' => 'int',
        'price' => 'double',
        'price_unit' => 'string',
        'amount' => 'double',
        'vat_inclusive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_price_component_id' => null,
        'custom_price_component_invoice_row_description' => null,
        'factor' => 'double',
        'start_date' => 'date',
        'end_date' => 'date',
        'product_id' => null,
        'usage' => 'int32',
        'price' => 'double',
        'price_unit' => null,
        'amount' => 'double',
        'vat_inclusive' => null
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
        'custom_price_component_id' => 'CustomPriceComponentId',
        'custom_price_component_invoice_row_description' => 'CustomPriceComponentInvoiceRowDescription',
        'factor' => 'Factor',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'product_id' => 'ProductId',
        'usage' => 'Usage',
        'price' => 'Price',
        'price_unit' => 'PriceUnit',
        'amount' => 'Amount',
        'vat_inclusive' => 'VatInclusive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_price_component_id' => 'setCustomPriceComponentId',
        'custom_price_component_invoice_row_description' => 'setCustomPriceComponentInvoiceRowDescription',
        'factor' => 'setFactor',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'product_id' => 'setProductId',
        'usage' => 'setUsage',
        'price' => 'setPrice',
        'price_unit' => 'setPriceUnit',
        'amount' => 'setAmount',
        'vat_inclusive' => 'setVatInclusive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_price_component_id' => 'getCustomPriceComponentId',
        'custom_price_component_invoice_row_description' => 'getCustomPriceComponentInvoiceRowDescription',
        'factor' => 'getFactor',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'product_id' => 'getProductId',
        'usage' => 'getUsage',
        'price' => 'getPrice',
        'price_unit' => 'getPriceUnit',
        'amount' => 'getAmount',
        'vat_inclusive' => 'getVatInclusive'
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
        $this->container['custom_price_component_id'] = isset($data['custom_price_component_id']) ? $data['custom_price_component_id'] : null;
        $this->container['custom_price_component_invoice_row_description'] = isset($data['custom_price_component_invoice_row_description']) ? $data['custom_price_component_invoice_row_description'] : null;
        $this->container['factor'] = isset($data['factor']) ? $data['factor'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_unit'] = isset($data['price_unit']) ? $data['price_unit'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat_inclusive'] = isset($data['vat_inclusive']) ? $data['vat_inclusive'] : null;
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
     * Gets custom_price_component_id
     *
     * @return string
     */
    public function getCustomPriceComponentId()
    {
        return $this->container['custom_price_component_id'];
    }

    /**
     * Sets custom_price_component_id
     *
     * @param string $custom_price_component_id Het Id van de CustomPriceComponent waarvoor de factuurregel aangemaakt moet worden. Deze `CustomPriceComponentId` kunnen opgevraagd worden uit de CustomPriceComponent-API.
     *
     * @return $this
     */
    public function setCustomPriceComponentId($custom_price_component_id)
    {
        $this->container['custom_price_component_id'] = $custom_price_component_id;

        return $this;
    }

    /**
     * Gets custom_price_component_invoice_row_description
     *
     * @return string
     */
    public function getCustomPriceComponentInvoiceRowDescription()
    {
        return $this->container['custom_price_component_invoice_row_description'];
    }

    /**
     * Sets custom_price_component_invoice_row_description
     *
     * @param string $custom_price_component_invoice_row_description Met dit optionele veld kan de standaard omschrijving vastgelegd bij het handmatige prijscomponent overruled worden. De omschrijving wordt de omschrijving van de factuurregel op de factuur.  Het veld mag geen lege string bevatten.
     *
     * @return $this
     */
    public function setCustomPriceComponentInvoiceRowDescription($custom_price_component_invoice_row_description)
    {
        $this->container['custom_price_component_invoice_row_description'] = $custom_price_component_invoice_row_description;

        return $this;
    }

    /**
     * Gets factor
     *
     * @return double
     */
    public function getFactor()
    {
        return $this->container['factor'];
    }

    /**
     * Sets factor
     *
     * @param double $factor Een optionele factor (percentage) voor de factuurregel
     *
     * @return $this
     */
    public function setFactor($factor)
    {
        $this->container['factor'] = $factor;

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
     * @param \DateTime $start_date De startdatum (vanaf-datum) voor de periode waarop de factuurregel van toepassing is
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
     * @param \DateTime $end_date De einddatum (tot-datum) voor de periode waarop de factuurregel van toepassing is
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
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
     * @param string $product_id Het product waar de factuurregel aan toebehoort.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param int $usage De verbruikseenheid van deze factuurregel.
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

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
     * @param double $price De prijs per eenheid van deze factuurregel. Dit mag bijvoorbeeld 1 zijn als een klant 1 laadpaal heeft gekocht.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string $price_unit De eenheid van de prijs.
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
     * @param double $amount Het bedrag van deze factuurregel.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param bool $vat_inclusive Deze variabele geeft aan of het bedrag van de factuurregel inclusief of exclusief btw is.
     *
     * @return $this
     */
    public function setVatInclusive($vat_inclusive)
    {
        $this->container['vat_inclusive'] = $vat_inclusive;

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



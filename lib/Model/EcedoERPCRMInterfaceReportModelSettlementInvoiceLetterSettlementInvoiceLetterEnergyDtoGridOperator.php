<?php
/**
 * EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoGridOperator
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
 * EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoGridOperator Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoGridOperator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.ReportModel.SettlementInvoiceLetter.SettlementInvoiceLetterEnergyDto_GridOperator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'grid_operator_invoice_amount_amount' => 'double',
        'grid_operator_invoice_amount_vat_amount' => 'double',
        'grid_operator_invoice_amount_total_amount' => 'double',
        'grid_operator_invoice_amount_vat_percentage' => 'double',
        'grid_operator_id' => 'string',
        'grid_operator_description' => 'string',
        'grid_operator_ean' => 'string',
        'grid_operator_market_segment' => 'string',
        'grid_operator_address_address_line1' => 'string',
        'grid_operator_address_address_line2' => 'string',
        'grid_operator_address_full_address' => 'string',
        'grid_operator_address_zip_code' => 'string',
        'grid_operator_address_city' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'grid_operator_invoice_amount_amount' => 'double',
        'grid_operator_invoice_amount_vat_amount' => 'double',
        'grid_operator_invoice_amount_total_amount' => 'double',
        'grid_operator_invoice_amount_vat_percentage' => 'double',
        'grid_operator_id' => null,
        'grid_operator_description' => null,
        'grid_operator_ean' => null,
        'grid_operator_market_segment' => null,
        'grid_operator_address_address_line1' => null,
        'grid_operator_address_address_line2' => null,
        'grid_operator_address_full_address' => null,
        'grid_operator_address_zip_code' => null,
        'grid_operator_address_city' => null
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
        'grid_operator_invoice_amount_amount' => 'GridOperator_Invoice_Amount_Amount',
        'grid_operator_invoice_amount_vat_amount' => 'GridOperator_Invoice_Amount_VatAmount',
        'grid_operator_invoice_amount_total_amount' => 'GridOperator_Invoice_Amount_TotalAmount',
        'grid_operator_invoice_amount_vat_percentage' => 'GridOperator_Invoice_Amount_VatPercentage',
        'grid_operator_id' => 'GridOperator_Id',
        'grid_operator_description' => 'GridOperator_Description',
        'grid_operator_ean' => 'GridOperator_EAN',
        'grid_operator_market_segment' => 'GridOperator_MarketSegment',
        'grid_operator_address_address_line1' => 'GridOperator_Address_AddressLine1',
        'grid_operator_address_address_line2' => 'GridOperator_Address_AddressLine2',
        'grid_operator_address_full_address' => 'GridOperator_Address_FullAddress',
        'grid_operator_address_zip_code' => 'GridOperator_Address_ZipCode',
        'grid_operator_address_city' => 'GridOperator_Address_City'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grid_operator_invoice_amount_amount' => 'setGridOperatorInvoiceAmountAmount',
        'grid_operator_invoice_amount_vat_amount' => 'setGridOperatorInvoiceAmountVatAmount',
        'grid_operator_invoice_amount_total_amount' => 'setGridOperatorInvoiceAmountTotalAmount',
        'grid_operator_invoice_amount_vat_percentage' => 'setGridOperatorInvoiceAmountVatPercentage',
        'grid_operator_id' => 'setGridOperatorId',
        'grid_operator_description' => 'setGridOperatorDescription',
        'grid_operator_ean' => 'setGridOperatorEan',
        'grid_operator_market_segment' => 'setGridOperatorMarketSegment',
        'grid_operator_address_address_line1' => 'setGridOperatorAddressAddressLine1',
        'grid_operator_address_address_line2' => 'setGridOperatorAddressAddressLine2',
        'grid_operator_address_full_address' => 'setGridOperatorAddressFullAddress',
        'grid_operator_address_zip_code' => 'setGridOperatorAddressZipCode',
        'grid_operator_address_city' => 'setGridOperatorAddressCity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grid_operator_invoice_amount_amount' => 'getGridOperatorInvoiceAmountAmount',
        'grid_operator_invoice_amount_vat_amount' => 'getGridOperatorInvoiceAmountVatAmount',
        'grid_operator_invoice_amount_total_amount' => 'getGridOperatorInvoiceAmountTotalAmount',
        'grid_operator_invoice_amount_vat_percentage' => 'getGridOperatorInvoiceAmountVatPercentage',
        'grid_operator_id' => 'getGridOperatorId',
        'grid_operator_description' => 'getGridOperatorDescription',
        'grid_operator_ean' => 'getGridOperatorEan',
        'grid_operator_market_segment' => 'getGridOperatorMarketSegment',
        'grid_operator_address_address_line1' => 'getGridOperatorAddressAddressLine1',
        'grid_operator_address_address_line2' => 'getGridOperatorAddressAddressLine2',
        'grid_operator_address_full_address' => 'getGridOperatorAddressFullAddress',
        'grid_operator_address_zip_code' => 'getGridOperatorAddressZipCode',
        'grid_operator_address_city' => 'getGridOperatorAddressCity'
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
        $this->container['grid_operator_invoice_amount_amount'] = isset($data['grid_operator_invoice_amount_amount']) ? $data['grid_operator_invoice_amount_amount'] : null;
        $this->container['grid_operator_invoice_amount_vat_amount'] = isset($data['grid_operator_invoice_amount_vat_amount']) ? $data['grid_operator_invoice_amount_vat_amount'] : null;
        $this->container['grid_operator_invoice_amount_total_amount'] = isset($data['grid_operator_invoice_amount_total_amount']) ? $data['grid_operator_invoice_amount_total_amount'] : null;
        $this->container['grid_operator_invoice_amount_vat_percentage'] = isset($data['grid_operator_invoice_amount_vat_percentage']) ? $data['grid_operator_invoice_amount_vat_percentage'] : null;
        $this->container['grid_operator_id'] = isset($data['grid_operator_id']) ? $data['grid_operator_id'] : null;
        $this->container['grid_operator_description'] = isset($data['grid_operator_description']) ? $data['grid_operator_description'] : null;
        $this->container['grid_operator_ean'] = isset($data['grid_operator_ean']) ? $data['grid_operator_ean'] : null;
        $this->container['grid_operator_market_segment'] = isset($data['grid_operator_market_segment']) ? $data['grid_operator_market_segment'] : null;
        $this->container['grid_operator_address_address_line1'] = isset($data['grid_operator_address_address_line1']) ? $data['grid_operator_address_address_line1'] : null;
        $this->container['grid_operator_address_address_line2'] = isset($data['grid_operator_address_address_line2']) ? $data['grid_operator_address_address_line2'] : null;
        $this->container['grid_operator_address_full_address'] = isset($data['grid_operator_address_full_address']) ? $data['grid_operator_address_full_address'] : null;
        $this->container['grid_operator_address_zip_code'] = isset($data['grid_operator_address_zip_code']) ? $data['grid_operator_address_zip_code'] : null;
        $this->container['grid_operator_address_city'] = isset($data['grid_operator_address_city']) ? $data['grid_operator_address_city'] : null;
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
     * Gets grid_operator_invoice_amount_amount
     *
     * @return double
     */
    public function getGridOperatorInvoiceAmountAmount()
    {
        return $this->container['grid_operator_invoice_amount_amount'];
    }

    /**
     * Sets grid_operator_invoice_amount_amount
     *
     * @param double $grid_operator_invoice_amount_amount grid_operator_invoice_amount_amount
     *
     * @return $this
     */
    public function setGridOperatorInvoiceAmountAmount($grid_operator_invoice_amount_amount)
    {
        $this->container['grid_operator_invoice_amount_amount'] = $grid_operator_invoice_amount_amount;

        return $this;
    }

    /**
     * Gets grid_operator_invoice_amount_vat_amount
     *
     * @return double
     */
    public function getGridOperatorInvoiceAmountVatAmount()
    {
        return $this->container['grid_operator_invoice_amount_vat_amount'];
    }

    /**
     * Sets grid_operator_invoice_amount_vat_amount
     *
     * @param double $grid_operator_invoice_amount_vat_amount grid_operator_invoice_amount_vat_amount
     *
     * @return $this
     */
    public function setGridOperatorInvoiceAmountVatAmount($grid_operator_invoice_amount_vat_amount)
    {
        $this->container['grid_operator_invoice_amount_vat_amount'] = $grid_operator_invoice_amount_vat_amount;

        return $this;
    }

    /**
     * Gets grid_operator_invoice_amount_total_amount
     *
     * @return double
     */
    public function getGridOperatorInvoiceAmountTotalAmount()
    {
        return $this->container['grid_operator_invoice_amount_total_amount'];
    }

    /**
     * Sets grid_operator_invoice_amount_total_amount
     *
     * @param double $grid_operator_invoice_amount_total_amount grid_operator_invoice_amount_total_amount
     *
     * @return $this
     */
    public function setGridOperatorInvoiceAmountTotalAmount($grid_operator_invoice_amount_total_amount)
    {
        $this->container['grid_operator_invoice_amount_total_amount'] = $grid_operator_invoice_amount_total_amount;

        return $this;
    }

    /**
     * Gets grid_operator_invoice_amount_vat_percentage
     *
     * @return double
     */
    public function getGridOperatorInvoiceAmountVatPercentage()
    {
        return $this->container['grid_operator_invoice_amount_vat_percentage'];
    }

    /**
     * Sets grid_operator_invoice_amount_vat_percentage
     *
     * @param double $grid_operator_invoice_amount_vat_percentage grid_operator_invoice_amount_vat_percentage
     *
     * @return $this
     */
    public function setGridOperatorInvoiceAmountVatPercentage($grid_operator_invoice_amount_vat_percentage)
    {
        $this->container['grid_operator_invoice_amount_vat_percentage'] = $grid_operator_invoice_amount_vat_percentage;

        return $this;
    }

    /**
     * Gets grid_operator_id
     *
     * @return string
     */
    public function getGridOperatorId()
    {
        return $this->container['grid_operator_id'];
    }

    /**
     * Sets grid_operator_id
     *
     * @param string $grid_operator_id grid_operator_id
     *
     * @return $this
     */
    public function setGridOperatorId($grid_operator_id)
    {
        $this->container['grid_operator_id'] = $grid_operator_id;

        return $this;
    }

    /**
     * Gets grid_operator_description
     *
     * @return string
     */
    public function getGridOperatorDescription()
    {
        return $this->container['grid_operator_description'];
    }

    /**
     * Sets grid_operator_description
     *
     * @param string $grid_operator_description grid_operator_description
     *
     * @return $this
     */
    public function setGridOperatorDescription($grid_operator_description)
    {
        $this->container['grid_operator_description'] = $grid_operator_description;

        return $this;
    }

    /**
     * Gets grid_operator_ean
     *
     * @return string
     */
    public function getGridOperatorEan()
    {
        return $this->container['grid_operator_ean'];
    }

    /**
     * Sets grid_operator_ean
     *
     * @param string $grid_operator_ean grid_operator_ean
     *
     * @return $this
     */
    public function setGridOperatorEan($grid_operator_ean)
    {
        $this->container['grid_operator_ean'] = $grid_operator_ean;

        return $this;
    }

    /**
     * Gets grid_operator_market_segment
     *
     * @return string
     */
    public function getGridOperatorMarketSegment()
    {
        return $this->container['grid_operator_market_segment'];
    }

    /**
     * Sets grid_operator_market_segment
     *
     * @param string $grid_operator_market_segment grid_operator_market_segment
     *
     * @return $this
     */
    public function setGridOperatorMarketSegment($grid_operator_market_segment)
    {
        $this->container['grid_operator_market_segment'] = $grid_operator_market_segment;

        return $this;
    }

    /**
     * Gets grid_operator_address_address_line1
     *
     * @return string
     */
    public function getGridOperatorAddressAddressLine1()
    {
        return $this->container['grid_operator_address_address_line1'];
    }

    /**
     * Sets grid_operator_address_address_line1
     *
     * @param string $grid_operator_address_address_line1 grid_operator_address_address_line1
     *
     * @return $this
     */
    public function setGridOperatorAddressAddressLine1($grid_operator_address_address_line1)
    {
        $this->container['grid_operator_address_address_line1'] = $grid_operator_address_address_line1;

        return $this;
    }

    /**
     * Gets grid_operator_address_address_line2
     *
     * @return string
     */
    public function getGridOperatorAddressAddressLine2()
    {
        return $this->container['grid_operator_address_address_line2'];
    }

    /**
     * Sets grid_operator_address_address_line2
     *
     * @param string $grid_operator_address_address_line2 grid_operator_address_address_line2
     *
     * @return $this
     */
    public function setGridOperatorAddressAddressLine2($grid_operator_address_address_line2)
    {
        $this->container['grid_operator_address_address_line2'] = $grid_operator_address_address_line2;

        return $this;
    }

    /**
     * Gets grid_operator_address_full_address
     *
     * @return string
     */
    public function getGridOperatorAddressFullAddress()
    {
        return $this->container['grid_operator_address_full_address'];
    }

    /**
     * Sets grid_operator_address_full_address
     *
     * @param string $grid_operator_address_full_address grid_operator_address_full_address
     *
     * @return $this
     */
    public function setGridOperatorAddressFullAddress($grid_operator_address_full_address)
    {
        $this->container['grid_operator_address_full_address'] = $grid_operator_address_full_address;

        return $this;
    }

    /**
     * Gets grid_operator_address_zip_code
     *
     * @return string
     */
    public function getGridOperatorAddressZipCode()
    {
        return $this->container['grid_operator_address_zip_code'];
    }

    /**
     * Sets grid_operator_address_zip_code
     *
     * @param string $grid_operator_address_zip_code grid_operator_address_zip_code
     *
     * @return $this
     */
    public function setGridOperatorAddressZipCode($grid_operator_address_zip_code)
    {
        $this->container['grid_operator_address_zip_code'] = $grid_operator_address_zip_code;

        return $this;
    }

    /**
     * Gets grid_operator_address_city
     *
     * @return string
     */
    public function getGridOperatorAddressCity()
    {
        return $this->container['grid_operator_address_city'];
    }

    /**
     * Sets grid_operator_address_city
     *
     * @param string $grid_operator_address_city grid_operator_address_city
     *
     * @return $this
     */
    public function setGridOperatorAddressCity($grid_operator_address_city)
    {
        $this->container['grid_operator_address_city'] = $grid_operator_address_city;

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



<?php
/**
 * EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoAdvancePayment
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
 * EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoAdvancePayment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceReportModelSettlementInvoiceLetterSettlementInvoiceLetterEnergyDtoAdvancePayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.ReportModel.SettlementInvoiceLetter.SettlementInvoiceLetterEnergyDto_AdvancePayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'advance_payment_id' => 'string',
        'organization_id' => 'string',
        'advance_payment_period_start_date' => '\DateTime',
        'advance_payment_period_end_date' => '\DateTime',
        'advance_payment_period_description_short' => 'string',
        'advance_payment_total_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'advance_payment_id' => null,
        'organization_id' => null,
        'advance_payment_period_start_date' => 'date',
        'advance_payment_period_end_date' => 'date',
        'advance_payment_period_description_short' => null,
        'advance_payment_total_amount' => 'double'
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
        'advance_payment_id' => 'AdvancePayment_Id',
        'organization_id' => 'Organization_Id',
        'advance_payment_period_start_date' => 'AdvancePayment_Period_StartDate',
        'advance_payment_period_end_date' => 'AdvancePayment_Period_EndDate',
        'advance_payment_period_description_short' => 'AdvancePayment_Period_DescriptionShort',
        'advance_payment_total_amount' => 'AdvancePayment_TotalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advance_payment_id' => 'setAdvancePaymentId',
        'organization_id' => 'setOrganizationId',
        'advance_payment_period_start_date' => 'setAdvancePaymentPeriodStartDate',
        'advance_payment_period_end_date' => 'setAdvancePaymentPeriodEndDate',
        'advance_payment_period_description_short' => 'setAdvancePaymentPeriodDescriptionShort',
        'advance_payment_total_amount' => 'setAdvancePaymentTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advance_payment_id' => 'getAdvancePaymentId',
        'organization_id' => 'getOrganizationId',
        'advance_payment_period_start_date' => 'getAdvancePaymentPeriodStartDate',
        'advance_payment_period_end_date' => 'getAdvancePaymentPeriodEndDate',
        'advance_payment_period_description_short' => 'getAdvancePaymentPeriodDescriptionShort',
        'advance_payment_total_amount' => 'getAdvancePaymentTotalAmount'
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
        $this->container['advance_payment_id'] = isset($data['advance_payment_id']) ? $data['advance_payment_id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['advance_payment_period_start_date'] = isset($data['advance_payment_period_start_date']) ? $data['advance_payment_period_start_date'] : null;
        $this->container['advance_payment_period_end_date'] = isset($data['advance_payment_period_end_date']) ? $data['advance_payment_period_end_date'] : null;
        $this->container['advance_payment_period_description_short'] = isset($data['advance_payment_period_description_short']) ? $data['advance_payment_period_description_short'] : null;
        $this->container['advance_payment_total_amount'] = isset($data['advance_payment_total_amount']) ? $data['advance_payment_total_amount'] : null;
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
     * Gets advance_payment_id
     *
     * @return string
     */
    public function getAdvancePaymentId()
    {
        return $this->container['advance_payment_id'];
    }

    /**
     * Sets advance_payment_id
     *
     * @param string $advance_payment_id advance_payment_id
     *
     * @return $this
     */
    public function setAdvancePaymentId($advance_payment_id)
    {
        $this->container['advance_payment_id'] = $advance_payment_id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets advance_payment_period_start_date
     *
     * @return \DateTime
     */
    public function getAdvancePaymentPeriodStartDate()
    {
        return $this->container['advance_payment_period_start_date'];
    }

    /**
     * Sets advance_payment_period_start_date
     *
     * @param \DateTime $advance_payment_period_start_date advance_payment_period_start_date
     *
     * @return $this
     */
    public function setAdvancePaymentPeriodStartDate($advance_payment_period_start_date)
    {
        $this->container['advance_payment_period_start_date'] = $advance_payment_period_start_date;

        return $this;
    }

    /**
     * Gets advance_payment_period_end_date
     *
     * @return \DateTime
     */
    public function getAdvancePaymentPeriodEndDate()
    {
        return $this->container['advance_payment_period_end_date'];
    }

    /**
     * Sets advance_payment_period_end_date
     *
     * @param \DateTime $advance_payment_period_end_date advance_payment_period_end_date
     *
     * @return $this
     */
    public function setAdvancePaymentPeriodEndDate($advance_payment_period_end_date)
    {
        $this->container['advance_payment_period_end_date'] = $advance_payment_period_end_date;

        return $this;
    }

    /**
     * Gets advance_payment_period_description_short
     *
     * @return string
     */
    public function getAdvancePaymentPeriodDescriptionShort()
    {
        return $this->container['advance_payment_period_description_short'];
    }

    /**
     * Sets advance_payment_period_description_short
     *
     * @param string $advance_payment_period_description_short advance_payment_period_description_short
     *
     * @return $this
     */
    public function setAdvancePaymentPeriodDescriptionShort($advance_payment_period_description_short)
    {
        $this->container['advance_payment_period_description_short'] = $advance_payment_period_description_short;

        return $this;
    }

    /**
     * Gets advance_payment_total_amount
     *
     * @return double
     */
    public function getAdvancePaymentTotalAmount()
    {
        return $this->container['advance_payment_total_amount'];
    }

    /**
     * Sets advance_payment_total_amount
     *
     * @param double $advance_payment_total_amount advance_payment_total_amount
     *
     * @return $this
     */
    public function setAdvancePaymentTotalAmount($advance_payment_total_amount)
    {
        $this->container['advance_payment_total_amount'] = $advance_payment_total_amount;

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



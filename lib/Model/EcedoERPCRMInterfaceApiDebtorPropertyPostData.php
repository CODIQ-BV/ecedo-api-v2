<?php
/**
 * EcedoERPCRMInterfaceApiDebtorPropertyPostData
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
 * EcedoERPCRMInterfaceApiDebtorPropertyPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiDebtorPropertyPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.DebtorPropertyPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debtor_property_type' => 'string',
        'debtor_property_value' => 'string',
        'start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'debtor_property_type' => null,
        'debtor_property_value' => null,
        'start_date' => 'date'
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
        'debtor_property_type' => 'DebtorPropertyType',
        'debtor_property_value' => 'DebtorPropertyValue',
        'start_date' => 'StartDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debtor_property_type' => 'setDebtorPropertyType',
        'debtor_property_value' => 'setDebtorPropertyValue',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debtor_property_type' => 'getDebtorPropertyType',
        'debtor_property_value' => 'getDebtorPropertyValue',
        'start_date' => 'getStartDate'
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

    const DEBTOR_PROPERTY_TYPE_PRINT_ADVANCE_PAYMENT_INVOICE = 'PrintAdvancePaymentInvoice';
    const DEBTOR_PROPERTY_TYPE_PREFERRED_AUTOMATIC_COLLECTION_DAY = 'PreferredAutomaticCollectionDay';
    const DEBTOR_PROPERTY_TYPE_CHILD_INVOICES_AS_EMAIL_ATTACHMENT = 'ChildInvoicesAsEmailAttachment';
    const DEBTOR_PROPERTY_TYPE_PREFERRED_ADVANCE_PAYMENT_INVOICE_CONTACT_METHOD = 'PreferredAdvancePaymentInvoiceContactMethod';
    const DEBTOR_PROPERTY_TYPE_PREFERRED_INVOICE_DAY = 'PreferredInvoiceDay';
    const DEBTOR_PROPERTY_TYPE_PREFERRED_SETTLEMENT_INVOICE_CONTACT_METHOD = 'PreferredSettlementInvoiceContactMethod';
    const DEBTOR_PROPERTY_TYPE_ADVANCE_PAYMENT_SCHEDULE = 'AdvancePaymentSchedule';
    const DEBTOR_PROPERTY_TYPE_COLLECTIVE_INVOICE_ATTACHMENT_DETAIL_LEVEL = 'CollectiveInvoiceAttachmentDetailLevel';
    const DEBTOR_PROPERTY_TYPE_GENERATE_E_INVOICE = 'GenerateEInvoice';
    const DEBTOR_PROPERTY_TYPE_VAT_NUMBER = 'VatNumber';
    const DEBTOR_PROPERTY_TYPE_KV_K_NUMBER = 'KvKNumber';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDebtorPropertyTypeAllowableValues()
    {
        return [
            self::DEBTOR_PROPERTY_TYPE_PRINT_ADVANCE_PAYMENT_INVOICE,
            self::DEBTOR_PROPERTY_TYPE_PREFERRED_AUTOMATIC_COLLECTION_DAY,
            self::DEBTOR_PROPERTY_TYPE_CHILD_INVOICES_AS_EMAIL_ATTACHMENT,
            self::DEBTOR_PROPERTY_TYPE_PREFERRED_ADVANCE_PAYMENT_INVOICE_CONTACT_METHOD,
            self::DEBTOR_PROPERTY_TYPE_PREFERRED_INVOICE_DAY,
            self::DEBTOR_PROPERTY_TYPE_PREFERRED_SETTLEMENT_INVOICE_CONTACT_METHOD,
            self::DEBTOR_PROPERTY_TYPE_ADVANCE_PAYMENT_SCHEDULE,
            self::DEBTOR_PROPERTY_TYPE_COLLECTIVE_INVOICE_ATTACHMENT_DETAIL_LEVEL,
            self::DEBTOR_PROPERTY_TYPE_GENERATE_E_INVOICE,
            self::DEBTOR_PROPERTY_TYPE_VAT_NUMBER,
            self::DEBTOR_PROPERTY_TYPE_KV_K_NUMBER,
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
        $this->container['debtor_property_type'] = isset($data['debtor_property_type']) ? $data['debtor_property_type'] : null;
        $this->container['debtor_property_value'] = isset($data['debtor_property_value']) ? $data['debtor_property_value'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDebtorPropertyTypeAllowableValues();
        if (!is_null($this->container['debtor_property_type']) && !in_array($this->container['debtor_property_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'debtor_property_type', must be one of '%s'",
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
     * Gets debtor_property_type
     *
     * @return string
     */
    public function getDebtorPropertyType()
    {
        return $this->container['debtor_property_type'];
    }

    /**
     * Sets debtor_property_type
     *
     * @param string $debtor_property_type debtor_property_type
     *
     * @return $this
     */
    public function setDebtorPropertyType($debtor_property_type)
    {
        $allowedValues = $this->getDebtorPropertyTypeAllowableValues();
        if (!is_null($debtor_property_type) && !in_array($debtor_property_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'debtor_property_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['debtor_property_type'] = $debtor_property_type;

        return $this;
    }

    /**
     * Gets debtor_property_value
     *
     * @return string
     */
    public function getDebtorPropertyValue()
    {
        return $this->container['debtor_property_value'];
    }

    /**
     * Sets debtor_property_value
     *
     * @param string $debtor_property_value debtor_property_value
     *
     * @return $this
     */
    public function setDebtorPropertyValue($debtor_property_value)
    {
        $this->container['debtor_property_value'] = $debtor_property_value;

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



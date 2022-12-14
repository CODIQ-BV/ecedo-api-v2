<?php
/**
 * EcedoERPCRMInterfaceApiDraftAdvancePayment
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
 * EcedoERPCRMInterfaceApiDraftAdvancePayment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiDraftAdvancePayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.DraftAdvancePayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connection_amounts' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePaymentPerConnection[]',
        'cluster_id' => 'string',
        'cluster_reference' => 'string',
        'has_advance_payment' => 'bool',
        'amount' => 'double',
        'agreed_amount' => 'double',
        'calculated_amount' => 'double',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'comment' => 'string',
        'advance_payment_rows' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePaymentRow[]',
        'combined_advance_payment_rows' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePaymentRow[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connection_amounts' => null,
        'cluster_id' => 'uuid',
        'cluster_reference' => null,
        'has_advance_payment' => null,
        'amount' => 'double',
        'agreed_amount' => 'double',
        'calculated_amount' => 'double',
        'start_date' => 'date',
        'end_date' => 'date',
        'comment' => null,
        'advance_payment_rows' => null,
        'combined_advance_payment_rows' => null
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
        'connection_amounts' => 'ConnectionAmounts',
        'cluster_id' => 'ClusterId',
        'cluster_reference' => 'ClusterReference',
        'has_advance_payment' => 'HasAdvancePayment',
        'amount' => 'Amount',
        'agreed_amount' => 'AgreedAmount',
        'calculated_amount' => 'CalculatedAmount',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'comment' => 'Comment',
        'advance_payment_rows' => 'AdvancePaymentRows',
        'combined_advance_payment_rows' => 'CombinedAdvancePaymentRows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_amounts' => 'setConnectionAmounts',
        'cluster_id' => 'setClusterId',
        'cluster_reference' => 'setClusterReference',
        'has_advance_payment' => 'setHasAdvancePayment',
        'amount' => 'setAmount',
        'agreed_amount' => 'setAgreedAmount',
        'calculated_amount' => 'setCalculatedAmount',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'comment' => 'setComment',
        'advance_payment_rows' => 'setAdvancePaymentRows',
        'combined_advance_payment_rows' => 'setCombinedAdvancePaymentRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_amounts' => 'getConnectionAmounts',
        'cluster_id' => 'getClusterId',
        'cluster_reference' => 'getClusterReference',
        'has_advance_payment' => 'getHasAdvancePayment',
        'amount' => 'getAmount',
        'agreed_amount' => 'getAgreedAmount',
        'calculated_amount' => 'getCalculatedAmount',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'comment' => 'getComment',
        'advance_payment_rows' => 'getAdvancePaymentRows',
        'combined_advance_payment_rows' => 'getCombinedAdvancePaymentRows'
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
        $this->container['connection_amounts'] = isset($data['connection_amounts']) ? $data['connection_amounts'] : null;
        $this->container['cluster_id'] = isset($data['cluster_id']) ? $data['cluster_id'] : null;
        $this->container['cluster_reference'] = isset($data['cluster_reference']) ? $data['cluster_reference'] : null;
        $this->container['has_advance_payment'] = isset($data['has_advance_payment']) ? $data['has_advance_payment'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['agreed_amount'] = isset($data['agreed_amount']) ? $data['agreed_amount'] : null;
        $this->container['calculated_amount'] = isset($data['calculated_amount']) ? $data['calculated_amount'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['advance_payment_rows'] = isset($data['advance_payment_rows']) ? $data['advance_payment_rows'] : null;
        $this->container['combined_advance_payment_rows'] = isset($data['combined_advance_payment_rows']) ? $data['combined_advance_payment_rows'] : null;
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
     * Gets connection_amounts
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePaymentPerConnection[]
     */
    public function getConnectionAmounts()
    {
        return $this->container['connection_amounts'];
    }

    /**
     * Sets connection_amounts
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePaymentPerConnection[] $connection_amounts connection_amounts
     *
     * @return $this
     */
    public function setConnectionAmounts($connection_amounts)
    {
        $this->container['connection_amounts'] = $connection_amounts;

        return $this;
    }

    /**
     * Gets cluster_id
     *
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['cluster_id'];
    }

    /**
     * Sets cluster_id
     *
     * @param string $cluster_id cluster_id
     *
     * @return $this
     */
    public function setClusterId($cluster_id)
    {
        $this->container['cluster_id'] = $cluster_id;

        return $this;
    }

    /**
     * Gets cluster_reference
     *
     * @return string
     */
    public function getClusterReference()
    {
        return $this->container['cluster_reference'];
    }

    /**
     * Sets cluster_reference
     *
     * @param string $cluster_reference De technische referentie van het cluster waarvoor het voorschot is aangemaakt
     *
     * @return $this
     */
    public function setClusterReference($cluster_reference)
    {
        $this->container['cluster_reference'] = $cluster_reference;

        return $this;
    }

    /**
     * Gets has_advance_payment
     *
     * @return bool
     */
    public function getHasAdvancePayment()
    {
        return $this->container['has_advance_payment'];
    }

    /**
     * Sets has_advance_payment
     *
     * @param bool $has_advance_payment Wanneer een cluster geen voorschot moet ontvangen, wordt een nee-voorschot aangemaakt, waardoor er dus een AdvancePayment-object dat aangeeft dat er geen voorschot verstuurd moet worden. Als deze variabele de waarde false heeft is er geen voorschot.
     *
     * @return $this
     */
    public function setHasAdvancePayment($has_advance_payment)
    {
        $this->container['has_advance_payment'] = $has_advance_payment;

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
     * @param double $amount Het totale voorschotbedrag in euro's, inclusief btw
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets agreed_amount
     *
     * @return double
     */
    public function getAgreedAmount()
    {
        return $this->container['agreed_amount'];
    }

    /**
     * Sets agreed_amount
     *
     * @param double $agreed_amount agreed_amount
     *
     * @return $this
     */
    public function setAgreedAmount($agreed_amount)
    {
        $this->container['agreed_amount'] = $agreed_amount;

        return $this;
    }

    /**
     * Gets calculated_amount
     *
     * @return double
     */
    public function getCalculatedAmount()
    {
        return $this->container['calculated_amount'];
    }

    /**
     * Sets calculated_amount
     *
     * @param double $calculated_amount Het berekende voorschotbedrag in euro's inclusief btw. Dit kan afwijken van het Amount als het voorschot met een AgreedAmount of TargetAmount is berekend
     *
     * @return $this
     */
    public function setCalculatedAmount($calculated_amount)
    {
        $this->container['calculated_amount'] = $calculated_amount;

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
     * @param \DateTime $start_date Eerste dag van de maand vanaf wanneer het voorschot geldig is
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
     * @param \DateTime $end_date Optionele eerste dag van de maand tot wanneer het voorschot geldig is (als het voorschot tot en met februari 2021 geldig is, zal dit veld de waarde \"2021-03-01T00:00:00\" bevatten. Als het voorschot geen einddatum heeft zal dit veld null zijn.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets advance_payment_rows
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePaymentRow[]
     */
    public function getAdvancePaymentRows()
    {
        return $this->container['advance_payment_rows'];
    }

    /**
     * Sets advance_payment_rows
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePaymentRow[] $advance_payment_rows Niet samengevoegde voorschotregels (zie uitleg over doCombineRows)
     *
     * @return $this
     */
    public function setAdvancePaymentRows($advance_payment_rows)
    {
        $this->container['advance_payment_rows'] = $advance_payment_rows;

        return $this;
    }

    /**
     * Gets combined_advance_payment_rows
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePaymentRow[]
     */
    public function getCombinedAdvancePaymentRows()
    {
        return $this->container['combined_advance_payment_rows'];
    }

    /**
     * Sets combined_advance_payment_rows
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePaymentRow[] $combined_advance_payment_rows Wel samengevoegde voorschotregels (zie uitleg over doCombineRows)
     *
     * @return $this
     */
    public function setCombinedAdvancePaymentRows($combined_advance_payment_rows)
    {
        $this->container['combined_advance_payment_rows'] = $combined_advance_payment_rows;

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



<?php
/**
 * EcedoERPCRMInterfaceReportModelChargeSessionInvoiceLetterChargeSessionInvoiceLetterDtoChargeDetailRecord
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
 * EcedoERPCRMInterfaceReportModelChargeSessionInvoiceLetterChargeSessionInvoiceLetterDtoChargeDetailRecord Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceReportModelChargeSessionInvoiceLetterChargeSessionInvoiceLetterDtoChargeDetailRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.ReportModel.ChargeSessionInvoiceLetter.ChargeSessionInvoiceLetterDto_ChargeDetailRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_session_ev_charge_card_number' => 'string',
        'charge_session_ev_charge_card_client_reference' => 'string',
        'charge_session_id' => 'string',
        'charge_session_location_address' => 'string',
        'charge_session_location_zip' => 'string',
        'charge_session_location_city' => 'string',
        'charge_session_location_country_code' => 'string',
        'charge_session_location_country' => 'string',
        'charge_session_start_date_time' => '\DateTime',
        'charge_session_start_date' => 'string',
        'charge_session_duration' => 'string',
        'charge_session_volume' => 'double',
        'charge_point_id' => 'string',
        'charge_point_operator_id' => 'string',
        'charge_session_total_price' => 'double',
        'charge_session_token_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_session_ev_charge_card_number' => null,
        'charge_session_ev_charge_card_client_reference' => null,
        'charge_session_id' => null,
        'charge_session_location_address' => null,
        'charge_session_location_zip' => null,
        'charge_session_location_city' => null,
        'charge_session_location_country_code' => null,
        'charge_session_location_country' => null,
        'charge_session_start_date_time' => 'date-time',
        'charge_session_start_date' => null,
        'charge_session_duration' => null,
        'charge_session_volume' => 'double',
        'charge_point_id' => null,
        'charge_point_operator_id' => null,
        'charge_session_total_price' => 'double',
        'charge_session_token_id' => null
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
        'charge_session_ev_charge_card_number' => 'ChargeSession_EvChargeCardNumber',
        'charge_session_ev_charge_card_client_reference' => 'ChargeSession_EvChargeCardClientReference',
        'charge_session_id' => 'ChargeSession_Id',
        'charge_session_location_address' => 'ChargeSession_Location_Address',
        'charge_session_location_zip' => 'ChargeSession_Location_Zip',
        'charge_session_location_city' => 'ChargeSession_Location_City',
        'charge_session_location_country_code' => 'ChargeSession_Location_CountryCode',
        'charge_session_location_country' => 'ChargeSession_Location_Country',
        'charge_session_start_date_time' => 'ChargeSession_StartDateTime',
        'charge_session_start_date' => 'ChargeSession_StartDate',
        'charge_session_duration' => 'ChargeSession_Duration',
        'charge_session_volume' => 'ChargeSession_Volume',
        'charge_point_id' => 'ChargePoint_Id',
        'charge_point_operator_id' => 'ChargePoint_Operator_Id',
        'charge_session_total_price' => 'ChargeSession_TotalPrice',
        'charge_session_token_id' => 'ChargeSession_TokenId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_session_ev_charge_card_number' => 'setChargeSessionEvChargeCardNumber',
        'charge_session_ev_charge_card_client_reference' => 'setChargeSessionEvChargeCardClientReference',
        'charge_session_id' => 'setChargeSessionId',
        'charge_session_location_address' => 'setChargeSessionLocationAddress',
        'charge_session_location_zip' => 'setChargeSessionLocationZip',
        'charge_session_location_city' => 'setChargeSessionLocationCity',
        'charge_session_location_country_code' => 'setChargeSessionLocationCountryCode',
        'charge_session_location_country' => 'setChargeSessionLocationCountry',
        'charge_session_start_date_time' => 'setChargeSessionStartDateTime',
        'charge_session_start_date' => 'setChargeSessionStartDate',
        'charge_session_duration' => 'setChargeSessionDuration',
        'charge_session_volume' => 'setChargeSessionVolume',
        'charge_point_id' => 'setChargePointId',
        'charge_point_operator_id' => 'setChargePointOperatorId',
        'charge_session_total_price' => 'setChargeSessionTotalPrice',
        'charge_session_token_id' => 'setChargeSessionTokenId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_session_ev_charge_card_number' => 'getChargeSessionEvChargeCardNumber',
        'charge_session_ev_charge_card_client_reference' => 'getChargeSessionEvChargeCardClientReference',
        'charge_session_id' => 'getChargeSessionId',
        'charge_session_location_address' => 'getChargeSessionLocationAddress',
        'charge_session_location_zip' => 'getChargeSessionLocationZip',
        'charge_session_location_city' => 'getChargeSessionLocationCity',
        'charge_session_location_country_code' => 'getChargeSessionLocationCountryCode',
        'charge_session_location_country' => 'getChargeSessionLocationCountry',
        'charge_session_start_date_time' => 'getChargeSessionStartDateTime',
        'charge_session_start_date' => 'getChargeSessionStartDate',
        'charge_session_duration' => 'getChargeSessionDuration',
        'charge_session_volume' => 'getChargeSessionVolume',
        'charge_point_id' => 'getChargePointId',
        'charge_point_operator_id' => 'getChargePointOperatorId',
        'charge_session_total_price' => 'getChargeSessionTotalPrice',
        'charge_session_token_id' => 'getChargeSessionTokenId'
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
        $this->container['charge_session_ev_charge_card_number'] = isset($data['charge_session_ev_charge_card_number']) ? $data['charge_session_ev_charge_card_number'] : null;
        $this->container['charge_session_ev_charge_card_client_reference'] = isset($data['charge_session_ev_charge_card_client_reference']) ? $data['charge_session_ev_charge_card_client_reference'] : null;
        $this->container['charge_session_id'] = isset($data['charge_session_id']) ? $data['charge_session_id'] : null;
        $this->container['charge_session_location_address'] = isset($data['charge_session_location_address']) ? $data['charge_session_location_address'] : null;
        $this->container['charge_session_location_zip'] = isset($data['charge_session_location_zip']) ? $data['charge_session_location_zip'] : null;
        $this->container['charge_session_location_city'] = isset($data['charge_session_location_city']) ? $data['charge_session_location_city'] : null;
        $this->container['charge_session_location_country_code'] = isset($data['charge_session_location_country_code']) ? $data['charge_session_location_country_code'] : null;
        $this->container['charge_session_location_country'] = isset($data['charge_session_location_country']) ? $data['charge_session_location_country'] : null;
        $this->container['charge_session_start_date_time'] = isset($data['charge_session_start_date_time']) ? $data['charge_session_start_date_time'] : null;
        $this->container['charge_session_start_date'] = isset($data['charge_session_start_date']) ? $data['charge_session_start_date'] : null;
        $this->container['charge_session_duration'] = isset($data['charge_session_duration']) ? $data['charge_session_duration'] : null;
        $this->container['charge_session_volume'] = isset($data['charge_session_volume']) ? $data['charge_session_volume'] : null;
        $this->container['charge_point_id'] = isset($data['charge_point_id']) ? $data['charge_point_id'] : null;
        $this->container['charge_point_operator_id'] = isset($data['charge_point_operator_id']) ? $data['charge_point_operator_id'] : null;
        $this->container['charge_session_total_price'] = isset($data['charge_session_total_price']) ? $data['charge_session_total_price'] : null;
        $this->container['charge_session_token_id'] = isset($data['charge_session_token_id']) ? $data['charge_session_token_id'] : null;
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
     * Gets charge_session_ev_charge_card_number
     *
     * @return string
     */
    public function getChargeSessionEvChargeCardNumber()
    {
        return $this->container['charge_session_ev_charge_card_number'];
    }

    /**
     * Sets charge_session_ev_charge_card_number
     *
     * @param string $charge_session_ev_charge_card_number charge_session_ev_charge_card_number
     *
     * @return $this
     */
    public function setChargeSessionEvChargeCardNumber($charge_session_ev_charge_card_number)
    {
        $this->container['charge_session_ev_charge_card_number'] = $charge_session_ev_charge_card_number;

        return $this;
    }

    /**
     * Gets charge_session_ev_charge_card_client_reference
     *
     * @return string
     */
    public function getChargeSessionEvChargeCardClientReference()
    {
        return $this->container['charge_session_ev_charge_card_client_reference'];
    }

    /**
     * Sets charge_session_ev_charge_card_client_reference
     *
     * @param string $charge_session_ev_charge_card_client_reference charge_session_ev_charge_card_client_reference
     *
     * @return $this
     */
    public function setChargeSessionEvChargeCardClientReference($charge_session_ev_charge_card_client_reference)
    {
        $this->container['charge_session_ev_charge_card_client_reference'] = $charge_session_ev_charge_card_client_reference;

        return $this;
    }

    /**
     * Gets charge_session_id
     *
     * @return string
     */
    public function getChargeSessionId()
    {
        return $this->container['charge_session_id'];
    }

    /**
     * Sets charge_session_id
     *
     * @param string $charge_session_id charge_session_id
     *
     * @return $this
     */
    public function setChargeSessionId($charge_session_id)
    {
        $this->container['charge_session_id'] = $charge_session_id;

        return $this;
    }

    /**
     * Gets charge_session_location_address
     *
     * @return string
     */
    public function getChargeSessionLocationAddress()
    {
        return $this->container['charge_session_location_address'];
    }

    /**
     * Sets charge_session_location_address
     *
     * @param string $charge_session_location_address charge_session_location_address
     *
     * @return $this
     */
    public function setChargeSessionLocationAddress($charge_session_location_address)
    {
        $this->container['charge_session_location_address'] = $charge_session_location_address;

        return $this;
    }

    /**
     * Gets charge_session_location_zip
     *
     * @return string
     */
    public function getChargeSessionLocationZip()
    {
        return $this->container['charge_session_location_zip'];
    }

    /**
     * Sets charge_session_location_zip
     *
     * @param string $charge_session_location_zip charge_session_location_zip
     *
     * @return $this
     */
    public function setChargeSessionLocationZip($charge_session_location_zip)
    {
        $this->container['charge_session_location_zip'] = $charge_session_location_zip;

        return $this;
    }

    /**
     * Gets charge_session_location_city
     *
     * @return string
     */
    public function getChargeSessionLocationCity()
    {
        return $this->container['charge_session_location_city'];
    }

    /**
     * Sets charge_session_location_city
     *
     * @param string $charge_session_location_city charge_session_location_city
     *
     * @return $this
     */
    public function setChargeSessionLocationCity($charge_session_location_city)
    {
        $this->container['charge_session_location_city'] = $charge_session_location_city;

        return $this;
    }

    /**
     * Gets charge_session_location_country_code
     *
     * @return string
     */
    public function getChargeSessionLocationCountryCode()
    {
        return $this->container['charge_session_location_country_code'];
    }

    /**
     * Sets charge_session_location_country_code
     *
     * @param string $charge_session_location_country_code charge_session_location_country_code
     *
     * @return $this
     */
    public function setChargeSessionLocationCountryCode($charge_session_location_country_code)
    {
        $this->container['charge_session_location_country_code'] = $charge_session_location_country_code;

        return $this;
    }

    /**
     * Gets charge_session_location_country
     *
     * @return string
     */
    public function getChargeSessionLocationCountry()
    {
        return $this->container['charge_session_location_country'];
    }

    /**
     * Sets charge_session_location_country
     *
     * @param string $charge_session_location_country charge_session_location_country
     *
     * @return $this
     */
    public function setChargeSessionLocationCountry($charge_session_location_country)
    {
        $this->container['charge_session_location_country'] = $charge_session_location_country;

        return $this;
    }

    /**
     * Gets charge_session_start_date_time
     *
     * @return \DateTime
     */
    public function getChargeSessionStartDateTime()
    {
        return $this->container['charge_session_start_date_time'];
    }

    /**
     * Sets charge_session_start_date_time
     *
     * @param \DateTime $charge_session_start_date_time charge_session_start_date_time
     *
     * @return $this
     */
    public function setChargeSessionStartDateTime($charge_session_start_date_time)
    {
        $this->container['charge_session_start_date_time'] = $charge_session_start_date_time;

        return $this;
    }

    /**
     * Gets charge_session_start_date
     *
     * @return string
     */
    public function getChargeSessionStartDate()
    {
        return $this->container['charge_session_start_date'];
    }

    /**
     * Sets charge_session_start_date
     *
     * @param string $charge_session_start_date charge_session_start_date
     *
     * @return $this
     */
    public function setChargeSessionStartDate($charge_session_start_date)
    {
        $this->container['charge_session_start_date'] = $charge_session_start_date;

        return $this;
    }

    /**
     * Gets charge_session_duration
     *
     * @return string
     */
    public function getChargeSessionDuration()
    {
        return $this->container['charge_session_duration'];
    }

    /**
     * Sets charge_session_duration
     *
     * @param string $charge_session_duration charge_session_duration
     *
     * @return $this
     */
    public function setChargeSessionDuration($charge_session_duration)
    {
        $this->container['charge_session_duration'] = $charge_session_duration;

        return $this;
    }

    /**
     * Gets charge_session_volume
     *
     * @return double
     */
    public function getChargeSessionVolume()
    {
        return $this->container['charge_session_volume'];
    }

    /**
     * Sets charge_session_volume
     *
     * @param double $charge_session_volume charge_session_volume
     *
     * @return $this
     */
    public function setChargeSessionVolume($charge_session_volume)
    {
        $this->container['charge_session_volume'] = $charge_session_volume;

        return $this;
    }

    /**
     * Gets charge_point_id
     *
     * @return string
     */
    public function getChargePointId()
    {
        return $this->container['charge_point_id'];
    }

    /**
     * Sets charge_point_id
     *
     * @param string $charge_point_id charge_point_id
     *
     * @return $this
     */
    public function setChargePointId($charge_point_id)
    {
        $this->container['charge_point_id'] = $charge_point_id;

        return $this;
    }

    /**
     * Gets charge_point_operator_id
     *
     * @return string
     */
    public function getChargePointOperatorId()
    {
        return $this->container['charge_point_operator_id'];
    }

    /**
     * Sets charge_point_operator_id
     *
     * @param string $charge_point_operator_id charge_point_operator_id
     *
     * @return $this
     */
    public function setChargePointOperatorId($charge_point_operator_id)
    {
        $this->container['charge_point_operator_id'] = $charge_point_operator_id;

        return $this;
    }

    /**
     * Gets charge_session_total_price
     *
     * @return double
     */
    public function getChargeSessionTotalPrice()
    {
        return $this->container['charge_session_total_price'];
    }

    /**
     * Sets charge_session_total_price
     *
     * @param double $charge_session_total_price charge_session_total_price
     *
     * @return $this
     */
    public function setChargeSessionTotalPrice($charge_session_total_price)
    {
        $this->container['charge_session_total_price'] = $charge_session_total_price;

        return $this;
    }

    /**
     * Gets charge_session_token_id
     *
     * @return string
     */
    public function getChargeSessionTokenId()
    {
        return $this->container['charge_session_token_id'];
    }

    /**
     * Sets charge_session_token_id
     *
     * @param string $charge_session_token_id charge_session_token_id
     *
     * @return $this
     */
    public function setChargeSessionTokenId($charge_session_token_id)
    {
        $this->container['charge_session_token_id'] = $charge_session_token_id;

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



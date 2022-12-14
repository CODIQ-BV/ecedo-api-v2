<?php
/**
 * EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostDataProcessSettingsPostData
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
 * EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostDataProcessSettingsPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostDataProcessSettingsPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ConnectionsConnectionGroupPostData.ProcessSettingsPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'use_cer_lookup' => 'bool',
        'mandate_id' => 'string',
        'iban_key' => 'string',
        'birth_day_key' => 'string',
        'cer_pre_notified' => 'bool',
        'skip_cooling_down_period' => 'bool',
        'start_energy_application_flow' => 'bool',
        'send_welcome_letter' => 'bool',
        'cooling_down_period_start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'use_cer_lookup' => null,
        'mandate_id' => null,
        'iban_key' => null,
        'birth_day_key' => null,
        'cer_pre_notified' => null,
        'skip_cooling_down_period' => null,
        'start_energy_application_flow' => null,
        'send_welcome_letter' => null,
        'cooling_down_period_start_date' => 'date'
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
        'use_cer_lookup' => 'UseCERLookup',
        'mandate_id' => 'MandateId',
        'iban_key' => 'IBANKey',
        'birth_day_key' => 'BirthDayKey',
        'cer_pre_notified' => 'CERPreNotified',
        'skip_cooling_down_period' => 'SkipCoolingDownPeriod',
        'start_energy_application_flow' => 'StartEnergyApplicationFlow',
        'send_welcome_letter' => 'SendWelcomeLetter',
        'cooling_down_period_start_date' => 'CoolingDownPeriodStartDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use_cer_lookup' => 'setUseCerLookup',
        'mandate_id' => 'setMandateId',
        'iban_key' => 'setIbanKey',
        'birth_day_key' => 'setBirthDayKey',
        'cer_pre_notified' => 'setCerPreNotified',
        'skip_cooling_down_period' => 'setSkipCoolingDownPeriod',
        'start_energy_application_flow' => 'setStartEnergyApplicationFlow',
        'send_welcome_letter' => 'setSendWelcomeLetter',
        'cooling_down_period_start_date' => 'setCoolingDownPeriodStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use_cer_lookup' => 'getUseCerLookup',
        'mandate_id' => 'getMandateId',
        'iban_key' => 'getIbanKey',
        'birth_day_key' => 'getBirthDayKey',
        'cer_pre_notified' => 'getCerPreNotified',
        'skip_cooling_down_period' => 'getSkipCoolingDownPeriod',
        'start_energy_application_flow' => 'getStartEnergyApplicationFlow',
        'send_welcome_letter' => 'getSendWelcomeLetter',
        'cooling_down_period_start_date' => 'getCoolingDownPeriodStartDate'
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
        $this->container['use_cer_lookup'] = isset($data['use_cer_lookup']) ? $data['use_cer_lookup'] : null;
        $this->container['mandate_id'] = isset($data['mandate_id']) ? $data['mandate_id'] : null;
        $this->container['iban_key'] = isset($data['iban_key']) ? $data['iban_key'] : null;
        $this->container['birth_day_key'] = isset($data['birth_day_key']) ? $data['birth_day_key'] : null;
        $this->container['cer_pre_notified'] = isset($data['cer_pre_notified']) ? $data['cer_pre_notified'] : null;
        $this->container['skip_cooling_down_period'] = isset($data['skip_cooling_down_period']) ? $data['skip_cooling_down_period'] : null;
        $this->container['start_energy_application_flow'] = isset($data['start_energy_application_flow']) ? $data['start_energy_application_flow'] : null;
        $this->container['send_welcome_letter'] = isset($data['send_welcome_letter']) ? $data['send_welcome_letter'] : null;
        $this->container['cooling_down_period_start_date'] = isset($data['cooling_down_period_start_date']) ? $data['cooling_down_period_start_date'] : null;
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
     * Gets use_cer_lookup
     *
     * @return bool
     */
    public function getUseCerLookup()
    {
        return $this->container['use_cer_lookup'];
    }

    /**
     * Sets use_cer_lookup
     *
     * @param bool $use_cer_lookup use_cer_lookup
     *
     * @return $this
     */
    public function setUseCerLookup($use_cer_lookup)
    {
        $this->container['use_cer_lookup'] = $use_cer_lookup;

        return $this;
    }

    /**
     * Gets mandate_id
     *
     * @return string
     */
    public function getMandateId()
    {
        return $this->container['mandate_id'];
    }

    /**
     * Sets mandate_id
     *
     * @param string $mandate_id mandate_id
     *
     * @return $this
     */
    public function setMandateId($mandate_id)
    {
        $this->container['mandate_id'] = $mandate_id;

        return $this;
    }

    /**
     * Gets iban_key
     *
     * @return string
     */
    public function getIbanKey()
    {
        return $this->container['iban_key'];
    }

    /**
     * Sets iban_key
     *
     * @param string $iban_key iban_key
     *
     * @return $this
     */
    public function setIbanKey($iban_key)
    {
        $this->container['iban_key'] = $iban_key;

        return $this;
    }

    /**
     * Gets birth_day_key
     *
     * @return string
     */
    public function getBirthDayKey()
    {
        return $this->container['birth_day_key'];
    }

    /**
     * Sets birth_day_key
     *
     * @param string $birth_day_key birth_day_key
     *
     * @return $this
     */
    public function setBirthDayKey($birth_day_key)
    {
        $this->container['birth_day_key'] = $birth_day_key;

        return $this;
    }

    /**
     * Gets cer_pre_notified
     *
     * @return bool
     */
    public function getCerPreNotified()
    {
        return $this->container['cer_pre_notified'];
    }

    /**
     * Sets cer_pre_notified
     *
     * @param bool $cer_pre_notified cer_pre_notified
     *
     * @return $this
     */
    public function setCerPreNotified($cer_pre_notified)
    {
        $this->container['cer_pre_notified'] = $cer_pre_notified;

        return $this;
    }

    /**
     * Gets skip_cooling_down_period
     *
     * @return bool
     */
    public function getSkipCoolingDownPeriod()
    {
        return $this->container['skip_cooling_down_period'];
    }

    /**
     * Sets skip_cooling_down_period
     *
     * @param bool $skip_cooling_down_period skip_cooling_down_period
     *
     * @return $this
     */
    public function setSkipCoolingDownPeriod($skip_cooling_down_period)
    {
        $this->container['skip_cooling_down_period'] = $skip_cooling_down_period;

        return $this;
    }

    /**
     * Gets start_energy_application_flow
     *
     * @return bool
     */
    public function getStartEnergyApplicationFlow()
    {
        return $this->container['start_energy_application_flow'];
    }

    /**
     * Sets start_energy_application_flow
     *
     * @param bool $start_energy_application_flow start_energy_application_flow
     *
     * @return $this
     */
    public function setStartEnergyApplicationFlow($start_energy_application_flow)
    {
        $this->container['start_energy_application_flow'] = $start_energy_application_flow;

        return $this;
    }

    /**
     * Gets send_welcome_letter
     *
     * @return bool
     */
    public function getSendWelcomeLetter()
    {
        return $this->container['send_welcome_letter'];
    }

    /**
     * Sets send_welcome_letter
     *
     * @param bool $send_welcome_letter send_welcome_letter
     *
     * @return $this
     */
    public function setSendWelcomeLetter($send_welcome_letter)
    {
        $this->container['send_welcome_letter'] = $send_welcome_letter;

        return $this;
    }

    /**
     * Gets cooling_down_period_start_date
     *
     * @return \DateTime
     */
    public function getCoolingDownPeriodStartDate()
    {
        return $this->container['cooling_down_period_start_date'];
    }

    /**
     * Sets cooling_down_period_start_date
     *
     * @param \DateTime $cooling_down_period_start_date cooling_down_period_start_date
     *
     * @return $this
     */
    public function setCoolingDownPeriodStartDate($cooling_down_period_start_date)
    {
        $this->container['cooling_down_period_start_date'] = $cooling_down_period_start_date;

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



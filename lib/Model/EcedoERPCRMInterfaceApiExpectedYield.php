<?php
/**
 * EcedoERPCRMInterfaceApiExpectedYield
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
 * EcedoERPCRMInterfaceApiExpectedYield Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiExpectedYield implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ExpectedYield';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'means_of_production_id' => 'string',
        'usage_active' => 'int',
        'count_active' => 'int',
        'usage_in_workflow' => 'int',
        'count_in_workflow' => 'int',
        'proposition_reference' => 'string',
        'proposition_group_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'means_of_production_id' => null,
        'usage_active' => 'int32',
        'count_active' => 'int32',
        'usage_in_workflow' => 'int32',
        'count_in_workflow' => 'int32',
        'proposition_reference' => null,
        'proposition_group_description' => null
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
        'means_of_production_id' => 'MeansOfProductionId',
        'usage_active' => 'UsageActive',
        'count_active' => 'CountActive',
        'usage_in_workflow' => 'UsageInWorkflow',
        'count_in_workflow' => 'CountInWorkflow',
        'proposition_reference' => 'PropositionReference',
        'proposition_group_description' => 'PropositionGroupDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'means_of_production_id' => 'setMeansOfProductionId',
        'usage_active' => 'setUsageActive',
        'count_active' => 'setCountActive',
        'usage_in_workflow' => 'setUsageInWorkflow',
        'count_in_workflow' => 'setCountInWorkflow',
        'proposition_reference' => 'setPropositionReference',
        'proposition_group_description' => 'setPropositionGroupDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'means_of_production_id' => 'getMeansOfProductionId',
        'usage_active' => 'getUsageActive',
        'count_active' => 'getCountActive',
        'usage_in_workflow' => 'getUsageInWorkflow',
        'count_in_workflow' => 'getCountInWorkflow',
        'proposition_reference' => 'getPropositionReference',
        'proposition_group_description' => 'getPropositionGroupDescription'
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
        $this->container['means_of_production_id'] = isset($data['means_of_production_id']) ? $data['means_of_production_id'] : null;
        $this->container['usage_active'] = isset($data['usage_active']) ? $data['usage_active'] : null;
        $this->container['count_active'] = isset($data['count_active']) ? $data['count_active'] : null;
        $this->container['usage_in_workflow'] = isset($data['usage_in_workflow']) ? $data['usage_in_workflow'] : null;
        $this->container['count_in_workflow'] = isset($data['count_in_workflow']) ? $data['count_in_workflow'] : null;
        $this->container['proposition_reference'] = isset($data['proposition_reference']) ? $data['proposition_reference'] : null;
        $this->container['proposition_group_description'] = isset($data['proposition_group_description']) ? $data['proposition_group_description'] : null;
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
     * Gets means_of_production_id
     *
     * @return string
     */
    public function getMeansOfProductionId()
    {
        return $this->container['means_of_production_id'];
    }

    /**
     * Sets means_of_production_id
     *
     * @param string $means_of_production_id means_of_production_id
     *
     * @return $this
     */
    public function setMeansOfProductionId($means_of_production_id)
    {
        $this->container['means_of_production_id'] = $means_of_production_id;

        return $this;
    }

    /**
     * Gets usage_active
     *
     * @return int
     */
    public function getUsageActive()
    {
        return $this->container['usage_active'];
    }

    /**
     * Sets usage_active
     *
     * @param int $usage_active usage_active
     *
     * @return $this
     */
    public function setUsageActive($usage_active)
    {
        $this->container['usage_active'] = $usage_active;

        return $this;
    }

    /**
     * Gets count_active
     *
     * @return int
     */
    public function getCountActive()
    {
        return $this->container['count_active'];
    }

    /**
     * Sets count_active
     *
     * @param int $count_active count_active
     *
     * @return $this
     */
    public function setCountActive($count_active)
    {
        $this->container['count_active'] = $count_active;

        return $this;
    }

    /**
     * Gets usage_in_workflow
     *
     * @return int
     */
    public function getUsageInWorkflow()
    {
        return $this->container['usage_in_workflow'];
    }

    /**
     * Sets usage_in_workflow
     *
     * @param int $usage_in_workflow usage_in_workflow
     *
     * @return $this
     */
    public function setUsageInWorkflow($usage_in_workflow)
    {
        $this->container['usage_in_workflow'] = $usage_in_workflow;

        return $this;
    }

    /**
     * Gets count_in_workflow
     *
     * @return int
     */
    public function getCountInWorkflow()
    {
        return $this->container['count_in_workflow'];
    }

    /**
     * Sets count_in_workflow
     *
     * @param int $count_in_workflow count_in_workflow
     *
     * @return $this
     */
    public function setCountInWorkflow($count_in_workflow)
    {
        $this->container['count_in_workflow'] = $count_in_workflow;

        return $this;
    }

    /**
     * Gets proposition_reference
     *
     * @return string
     */
    public function getPropositionReference()
    {
        return $this->container['proposition_reference'];
    }

    /**
     * Sets proposition_reference
     *
     * @param string $proposition_reference proposition_reference
     *
     * @return $this
     */
    public function setPropositionReference($proposition_reference)
    {
        $this->container['proposition_reference'] = $proposition_reference;

        return $this;
    }

    /**
     * Gets proposition_group_description
     *
     * @return string
     */
    public function getPropositionGroupDescription()
    {
        return $this->container['proposition_group_description'];
    }

    /**
     * Sets proposition_group_description
     *
     * @param string $proposition_group_description proposition_group_description
     *
     * @return $this
     */
    public function setPropositionGroupDescription($proposition_group_description)
    {
        $this->container['proposition_group_description'] = $proposition_group_description;

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



# EcedoERPCRMInterfaceApiConnection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_id** | **string** |  | [optional] 
**connection_id** | **string** |  | [optional] 
**cluster_id** | **string** |  | [optional] 
**cluster_reference** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**comment** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**status_localized** | **string** |  | [optional] 
**ean** | **string** |  | [optional] 
**market_segment** | **string** |  | [optional] 
**market_segment_localized** | **string** |  | [optional] 
**usage_type** | **string** |  | [optional] 
**usage_type_localized** | **string** |  | [optional] 
**type_of_supply** | **string** |  | [optional] 
**type_of_supply_localized** | **string** |  | [optional] 
**profile** | **string** |  | [optional] 
**metering_method** | **string** |  | [optional] 
**grid_operator** | **string** |  | [optional] 
**grid_operator_ean** | **string** |  | [optional] 
**has_smart_meter** | **bool** |  | [optional] 
**has_smart_meter_service** | **bool** |  | [optional] 
**grid_area** | **string** |  | [optional] 
**gos** | **string** |  | [optional] 
**gos_region** | **int** |  | [optional] 
**gos_region_localized** | **string** |  | [optional] 
**cap_tar_code** | **string** |  | [optional] 
**address** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiAddress**](EcedoERPCRMInterfaceApiAddress.md) |  | [optional] 
**annual_standard_usage** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage**](EcedoERPCRMInterfaceApiAnnualStandardUsage.md) |  | [optional] 
**expected_annual_standard_usage** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiExpectedAnnualStandardUsage**](EcedoERPCRMInterfaceApiExpectedAnnualStandardUsage.md) |  | [optional] 
**active_annual_standard_usage_type** | **string** |  | [optional] 
**contract** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiContract**](EcedoERPCRMInterfaceApiContract.md) | Dit veld bevat het actieve of het eerstvolgende toekomstige contract. Als de aansluiting alleen historische contracten heeft is de waarde van dit veld &#x60;null&#x60; | [optional] 
**meelift_contract** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeeliftContract**](EcedoERPCRMInterfaceApiMeeliftContract.md) | Als de meelift-functionaliteit is ingeschakeld bevat dit veld het actieve of het eerstvolgende toekomstige contract. Als de meelift-functionaliteit niet is ingeschakeld is deze waarde altijd &#x60;null&#x60; | [optional] 
**advance_payment** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePayment**](EcedoERPCRMInterfaceApiAdvancePayment.md) |  | [optional] 
**meter** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeter**](EcedoERPCRMInterfaceApiMeter.md) |  | [optional] 
**switch_type** | **string** |  | [optional] 
**switch_type_localized** | **string** |  | [optional] 
**has_single_usage** | **bool** |  | [optional] 
**has_double_usage** | **bool** |  | [optional] 
**bill_as_single** | **bool** |  | [optional] 
**request_p4_interval_readings** | **bool** |  | [optional] 
**administrative_status_smart_meter** | **string** |  | [optional] 
**administrative_status_smart_meter_localized** | **string** |  | [optional] 
**connection_properties** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionProperty[]**](EcedoERPCRMInterfaceApiConnectionProperty.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



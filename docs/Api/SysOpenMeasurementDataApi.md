# Swagger\Client\SysOpenMeasurementDataApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysOpenMeasurementDataGet**](SysOpenMeasurementDataApi.md#sysOpenMeasurementDataGet) | **GET** /sysapi/v1.0/OpenMeasurementData/{ean} | 


# **sysOpenMeasurementDataGet**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiOpenMeasurementData sysOpenMeasurementDataGet($ean)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysOpenMeasurementDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = "ean_example"; // string | 

try {
    $result = $apiInstance->sysOpenMeasurementDataGet($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysOpenMeasurementDataApi->sysOpenMeasurementDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiOpenMeasurementData**](../Model/EcedoERPCRMInterfaceApiOpenMeasurementData.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


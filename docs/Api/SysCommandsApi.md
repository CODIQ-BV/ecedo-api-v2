# Swagger\Client\SysCommandsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysCommandsSendCommand**](SysCommandsApi.md#sysCommandsSendCommand) | **POST** /sysapi/v1.0/sendCommand | 


# **sysCommandsSendCommand**
> object sysCommandsSendCommand($command_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysCommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_data = "command_data_example"; // string | 

try {
    $result = $apiInstance->sysCommandsSendCommand($command_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysCommandsApi->sysCommandsSendCommand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_data** | **string**|  |

### Return type

**object**

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


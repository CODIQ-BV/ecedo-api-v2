<?php
/**
 * SysAnnualStandardUsagesApi
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

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * SysAnnualStandardUsagesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SysAnnualStandardUsagesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsage
     *
     * Verwijderen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsage($organization_id, $connection_id)
    {
        $this->sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageWithHttpInfo($organization_id, $connection_id);
    }

    /**
     * Operation sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageWithHttpInfo
     *
     * Verwijderen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageWithHttpInfo($organization_id, $connection_id)
    {
        $returnType = '';
        $request = $this->sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageRequest($organization_id, $connection_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageAsync
     *
     * Verwijderen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageAsync($organization_id, $connection_id)
    {
        return $this->sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageAsyncWithHttpInfo($organization_id, $connection_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageAsyncWithHttpInfo
     *
     * Verwijderen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageAsyncWithHttpInfo($organization_id, $connection_id)
    {
        $returnType = '';
        $request = $this->sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageRequest($organization_id, $connection_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsage'
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsageRequest($organization_id, $connection_id)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsage'
            );
        }
        // verify the required parameter 'connection_id' is set
        if ($connection_id === null || (is_array($connection_id) && count($connection_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connection_id when calling sysAnnualStandardUsagesDeleteExpectedAnnualStandardUsage'
            );
        }

        $resourcePath = '/sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/expectedannualstandardusages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($connection_id !== null) {
            $resourcePath = str_replace(
                '{' . 'connectionId' . '}',
                ObjectSerializer::toPathValue($connection_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sysAnnualStandardUsagesPostExpectedAnnualStandardUsage
     *
     * Aanpassen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData $expected_annual_standard_usage  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sysAnnualStandardUsagesPostExpectedAnnualStandardUsage($organization_id, $connection_id, $expected_annual_standard_usage)
    {
        $this->sysAnnualStandardUsagesPostExpectedAnnualStandardUsageWithHttpInfo($organization_id, $connection_id, $expected_annual_standard_usage);
    }

    /**
     * Operation sysAnnualStandardUsagesPostExpectedAnnualStandardUsageWithHttpInfo
     *
     * Aanpassen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData $expected_annual_standard_usage  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sysAnnualStandardUsagesPostExpectedAnnualStandardUsageWithHttpInfo($organization_id, $connection_id, $expected_annual_standard_usage)
    {
        $returnType = '';
        $request = $this->sysAnnualStandardUsagesPostExpectedAnnualStandardUsageRequest($organization_id, $connection_id, $expected_annual_standard_usage);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sysAnnualStandardUsagesPostExpectedAnnualStandardUsageAsync
     *
     * Aanpassen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData $expected_annual_standard_usage  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysAnnualStandardUsagesPostExpectedAnnualStandardUsageAsync($organization_id, $connection_id, $expected_annual_standard_usage)
    {
        return $this->sysAnnualStandardUsagesPostExpectedAnnualStandardUsageAsyncWithHttpInfo($organization_id, $connection_id, $expected_annual_standard_usage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysAnnualStandardUsagesPostExpectedAnnualStandardUsageAsyncWithHttpInfo
     *
     * Aanpassen verwacht jaarverbruik
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData $expected_annual_standard_usage  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysAnnualStandardUsagesPostExpectedAnnualStandardUsageAsyncWithHttpInfo($organization_id, $connection_id, $expected_annual_standard_usage)
    {
        $returnType = '';
        $request = $this->sysAnnualStandardUsagesPostExpectedAnnualStandardUsageRequest($organization_id, $connection_id, $expected_annual_standard_usage);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sysAnnualStandardUsagesPostExpectedAnnualStandardUsage'
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiExpectedAnnualStandardUsagePostData $expected_annual_standard_usage  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysAnnualStandardUsagesPostExpectedAnnualStandardUsageRequest($organization_id, $connection_id, $expected_annual_standard_usage)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling sysAnnualStandardUsagesPostExpectedAnnualStandardUsage'
            );
        }
        // verify the required parameter 'connection_id' is set
        if ($connection_id === null || (is_array($connection_id) && count($connection_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connection_id when calling sysAnnualStandardUsagesPostExpectedAnnualStandardUsage'
            );
        }
        // verify the required parameter 'expected_annual_standard_usage' is set
        if ($expected_annual_standard_usage === null || (is_array($expected_annual_standard_usage) && count($expected_annual_standard_usage) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $expected_annual_standard_usage when calling sysAnnualStandardUsagesPostExpectedAnnualStandardUsage'
            );
        }

        $resourcePath = '/sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/expectedannualstandardusages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($connection_id !== null) {
            $resourcePath = str_replace(
                '{' . 'connectionId' . '}',
                ObjectSerializer::toPathValue($connection_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($expected_annual_standard_usage)) {
            $_tempBody = $expected_annual_standard_usage;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sysAnnualStandardUsagesSetActiveAnnualStandardUsageType
     *
     * Aanpassen actief verbruikstype
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData $set_annual_standard_usage_type_post_data  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sysAnnualStandardUsagesSetActiveAnnualStandardUsageType($organization_id, $connection_id, $set_annual_standard_usage_type_post_data)
    {
        $this->sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeWithHttpInfo($organization_id, $connection_id, $set_annual_standard_usage_type_post_data);
    }

    /**
     * Operation sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeWithHttpInfo
     *
     * Aanpassen actief verbruikstype
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData $set_annual_standard_usage_type_post_data  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeWithHttpInfo($organization_id, $connection_id, $set_annual_standard_usage_type_post_data)
    {
        $returnType = '';
        $request = $this->sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeRequest($organization_id, $connection_id, $set_annual_standard_usage_type_post_data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeAsync
     *
     * Aanpassen actief verbruikstype
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData $set_annual_standard_usage_type_post_data  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeAsync($organization_id, $connection_id, $set_annual_standard_usage_type_post_data)
    {
        return $this->sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeAsyncWithHttpInfo($organization_id, $connection_id, $set_annual_standard_usage_type_post_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeAsyncWithHttpInfo
     *
     * Aanpassen actief verbruikstype
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData $set_annual_standard_usage_type_post_data  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeAsyncWithHttpInfo($organization_id, $connection_id, $set_annual_standard_usage_type_post_data)
    {
        $returnType = '';
        $request = $this->sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeRequest($organization_id, $connection_id, $set_annual_standard_usage_type_post_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sysAnnualStandardUsagesSetActiveAnnualStandardUsageType'
     *
     * @param  string $organization_id  (required)
     * @param  string $connection_id  (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiSetAnnualStandardUsageTypePostData $set_annual_standard_usage_type_post_data  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysAnnualStandardUsagesSetActiveAnnualStandardUsageTypeRequest($organization_id, $connection_id, $set_annual_standard_usage_type_post_data)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling sysAnnualStandardUsagesSetActiveAnnualStandardUsageType'
            );
        }
        // verify the required parameter 'connection_id' is set
        if ($connection_id === null || (is_array($connection_id) && count($connection_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connection_id when calling sysAnnualStandardUsagesSetActiveAnnualStandardUsageType'
            );
        }
        // verify the required parameter 'set_annual_standard_usage_type_post_data' is set
        if ($set_annual_standard_usage_type_post_data === null || (is_array($set_annual_standard_usage_type_post_data) && count($set_annual_standard_usage_type_post_data) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $set_annual_standard_usage_type_post_data when calling sysAnnualStandardUsagesSetActiveAnnualStandardUsageType'
            );
        }

        $resourcePath = '/sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/annualstandardusages/setactiveannualstandardusagetype';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($connection_id !== null) {
            $resourcePath = str_replace(
                '{' . 'connectionId' . '}',
                ObjectSerializer::toPathValue($connection_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($set_annual_standard_usage_type_post_data)) {
            $_tempBody = $set_annual_standard_usage_type_post_data;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
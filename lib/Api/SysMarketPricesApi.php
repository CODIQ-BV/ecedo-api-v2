<?php
/**
 * SysMarketPricesApi
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
 * SysMarketPricesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SysMarketPricesApi
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
     * Operation sysMarketPricesGet
     *
     * Haal marktprijzen op voor periode en marktprijstype
     *
     * @param  \DateTime $start_date  (required)
     * @param  \DateTime $end_date  (required)
     * @param  string $market_price_type  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[]
     */
    public function sysMarketPricesGet($start_date, $end_date, $market_price_type)
    {
        list($response) = $this->sysMarketPricesGetWithHttpInfo($start_date, $end_date, $market_price_type);
        return $response;
    }

    /**
     * Operation sysMarketPricesGetWithHttpInfo
     *
     * Haal marktprijzen op voor periode en marktprijstype
     *
     * @param  \DateTime $start_date  (required)
     * @param  \DateTime $end_date  (required)
     * @param  string $market_price_type  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[], HTTP status code, HTTP response headers (array of strings)
     */
    public function sysMarketPricesGetWithHttpInfo($start_date, $end_date, $market_price_type)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[]';
        $request = $this->sysMarketPricesGetRequest($start_date, $end_date, $market_price_type);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * Operation sysMarketPricesGetAsync
     *
     * Haal marktprijzen op voor periode en marktprijstype
     *
     * @param  \DateTime $start_date  (required)
     * @param  \DateTime $end_date  (required)
     * @param  string $market_price_type  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysMarketPricesGetAsync($start_date, $end_date, $market_price_type)
    {
        return $this->sysMarketPricesGetAsyncWithHttpInfo($start_date, $end_date, $market_price_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysMarketPricesGetAsyncWithHttpInfo
     *
     * Haal marktprijzen op voor periode en marktprijstype
     *
     * @param  \DateTime $start_date  (required)
     * @param  \DateTime $end_date  (required)
     * @param  string $market_price_type  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysMarketPricesGetAsyncWithHttpInfo($start_date, $end_date, $market_price_type)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[]';
        $request = $this->sysMarketPricesGetRequest($start_date, $end_date, $market_price_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'sysMarketPricesGet'
     *
     * @param  \DateTime $start_date  (required)
     * @param  \DateTime $end_date  (required)
     * @param  string $market_price_type  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysMarketPricesGetRequest($start_date, $end_date, $market_price_type)
    {
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling sysMarketPricesGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling sysMarketPricesGet'
            );
        }
        // verify the required parameter 'market_price_type' is set
        if ($market_price_type === null || (is_array($market_price_type) && count($market_price_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $market_price_type when calling sysMarketPricesGet'
            );
        }

        $resourcePath = '/sysapi/v1.0/marketprices/{startDate}/{endDate}/{marketPriceType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($start_date !== null) {
            $resourcePath = str_replace(
                '{' . 'startDate' . '}',
                ObjectSerializer::toPathValue($start_date),
                $resourcePath
            );
        }
        // path params
        if ($end_date !== null) {
            $resourcePath = str_replace(
                '{' . 'endDate' . '}',
                ObjectSerializer::toPathValue($end_date),
                $resourcePath
            );
        }
        // path params
        if ($market_price_type !== null) {
            $resourcePath = str_replace(
                '{' . 'marketPriceType' . '}',
                ObjectSerializer::toPathValue($market_price_type),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sysMarketPricesPostMarketPrices
     *
     * Marktprijzen toevoegen voor marktprijstype
     *
     * @param  string $market_price_type Het marktprijstype (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPricesPostData $market_prices_post_data De marktprijzen, zie het object-model voor meer informatie (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function sysMarketPricesPostMarketPrices($market_price_type, $market_prices_post_data)
    {
        list($response) = $this->sysMarketPricesPostMarketPricesWithHttpInfo($market_price_type, $market_prices_post_data);
        return $response;
    }

    /**
     * Operation sysMarketPricesPostMarketPricesWithHttpInfo
     *
     * Marktprijzen toevoegen voor marktprijstype
     *
     * @param  string $market_price_type Het marktprijstype (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPricesPostData $market_prices_post_data De marktprijzen, zie het object-model voor meer informatie (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function sysMarketPricesPostMarketPricesWithHttpInfo($market_price_type, $market_prices_post_data)
    {
        $returnType = 'object';
        $request = $this->sysMarketPricesPostMarketPricesRequest($market_price_type, $market_prices_post_data);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 204:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * Operation sysMarketPricesPostMarketPricesAsync
     *
     * Marktprijzen toevoegen voor marktprijstype
     *
     * @param  string $market_price_type Het marktprijstype (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPricesPostData $market_prices_post_data De marktprijzen, zie het object-model voor meer informatie (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysMarketPricesPostMarketPricesAsync($market_price_type, $market_prices_post_data)
    {
        return $this->sysMarketPricesPostMarketPricesAsyncWithHttpInfo($market_price_type, $market_prices_post_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysMarketPricesPostMarketPricesAsyncWithHttpInfo
     *
     * Marktprijzen toevoegen voor marktprijstype
     *
     * @param  string $market_price_type Het marktprijstype (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPricesPostData $market_prices_post_data De marktprijzen, zie het object-model voor meer informatie (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysMarketPricesPostMarketPricesAsyncWithHttpInfo($market_price_type, $market_prices_post_data)
    {
        $returnType = 'object';
        $request = $this->sysMarketPricesPostMarketPricesRequest($market_price_type, $market_prices_post_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'sysMarketPricesPostMarketPrices'
     *
     * @param  string $market_price_type Het marktprijstype (required)
     * @param  \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPricesPostData $market_prices_post_data De marktprijzen, zie het object-model voor meer informatie (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysMarketPricesPostMarketPricesRequest($market_price_type, $market_prices_post_data)
    {
        // verify the required parameter 'market_price_type' is set
        if ($market_price_type === null || (is_array($market_price_type) && count($market_price_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $market_price_type when calling sysMarketPricesPostMarketPrices'
            );
        }
        // verify the required parameter 'market_prices_post_data' is set
        if ($market_prices_post_data === null || (is_array($market_prices_post_data) && count($market_prices_post_data) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $market_prices_post_data when calling sysMarketPricesPostMarketPrices'
            );
        }

        $resourcePath = '/sysapi/v1.0/marketprices/{marketPriceType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($market_price_type !== null) {
            $resourcePath = str_replace(
                '{' . 'marketPriceType' . '}',
                ObjectSerializer::toPathValue($market_price_type),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($market_prices_post_data)) {
            $_tempBody = $market_prices_post_data;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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

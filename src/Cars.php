<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester;

class Cars 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Find cars by CNIC
     * 
     * Returns cars based on CNIC with apiKey and  httpBasic security
     * 
     * @param \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest $request
     * @return \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICResponse
     */
	public function getCarsByCNIC(
        ?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest $request,
    ): \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/cars/{cnic}', \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cars = $serializer->deserialize((string)$httpResponse->getBody(), 'array<MultiAuthTester\MultipleAuthTester\Models\Shared\Car>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'MultiAuthTester\MultipleAuthTester\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Find cars by ID
     * 
     * Returns cars based on ID with apiKey or httpBasic security
     * 
     * @param \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdRequest $request
     * @param \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdSecurity $security
     * @return \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdResponse
     */
	public function getCarsById(
        ?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdRequest $request,
        \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdSecurity $security,
    ): \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carsbyid/{id}', \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cars = $serializer->deserialize((string)$httpResponse->getBody(), 'array<MultiAuthTester\MultipleAuthTester\Models\Shared\Car>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'MultiAuthTester\MultipleAuthTester\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Find cars by Name
     * 
     * Returns cars based on NAME with apiKeyHeader and httpBasic security
     * 
     * @param \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameRequest $request
     * @param \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameSecurity $security
     * @return \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameResponse
     */
	public function getCarsByName(
        ?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameRequest $request,
        \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameSecurity $security,
    ): \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/carsbyname/{name}', \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cars = $serializer->deserialize((string)$httpResponse->getBody(), 'array<MultiAuthTester\MultipleAuthTester\Models\Shared\Car>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorModel = $serializer->deserialize((string)$httpResponse->getBody(), 'MultiAuthTester\MultipleAuthTester\Models\Shared\ErrorModel', 'json');
            }
        }

        return $response;
    }
}
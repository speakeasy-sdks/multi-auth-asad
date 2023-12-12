<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '1.0.1';
	public string $sdkVersion = '0.8.0';
	public string $genVersion = '2.213.3';
	public string $userAgent = 'speakeasy-sdk/php 0.8.0 2.213.3 1.0.1 multiauthtester/multipleauthtester';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return MultipleAuthTester::SERVERS[$this->serverIndex];
	}
	
}
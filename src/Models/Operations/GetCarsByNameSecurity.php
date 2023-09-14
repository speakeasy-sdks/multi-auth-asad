<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Operations;

use \MultiAuthTester\MultipleAuthTester\Utils\SpeakeasyMetadata;
class GetCarsByNameSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=X-API-KEY')]
    public string $apiKeyHeader;
    
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=basic')]
    public \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic $httpBasic;
    
	public function __construct()
	{
		$this->apiKeyHeader = "";
		$this->httpBasic = new \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic();
	}
}
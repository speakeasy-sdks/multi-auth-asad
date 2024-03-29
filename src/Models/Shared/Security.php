<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Shared;

use \MultiAuthTester\MultipleAuthTester\Utils\SpeakeasyMetadata;
class Security
{
	#[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=query,name=api_key')]
    public string $apiKey;
    
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=basic')]
    public SchemeHTTPBasic $httpBasic;
    
	public function __construct()
	{
		$this->apiKey = "";
		$this->httpBasic = new \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic();
	}
}

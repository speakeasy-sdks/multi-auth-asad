<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Operations;

use \MultiAuthTester\MultipleAuthTester\Utils\SpeakeasyMetadata;
class GetCarsByNameRequest
{
    /**
     * Name of a Car
     * 
     * @var string $name
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=name')]
    public string $name;
    
	public function __construct()
	{
		$this->name = "";
	}
}

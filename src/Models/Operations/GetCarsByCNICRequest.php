<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Operations;

use \MultiAuthTester\MultipleAuthTester\Utils\SpeakeasyMetadata;
class GetCarsByCNICRequest
{
    /**
     * CNIC of a person
     * 
     * @var string $cnic
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=cnic')]
    public string $cnic;
    
	public function __construct()
	{
		$this->cnic = "";
	}
}

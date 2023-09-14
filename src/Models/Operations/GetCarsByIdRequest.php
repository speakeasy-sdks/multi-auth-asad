<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Operations;

use \MultiAuthTester\MultipleAuthTester\Utils\SpeakeasyMetadata;
class GetCarsByIdRequest
{
    /**
     * ID of a person
     * 
     * @var int $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public int $id;
    
	public function __construct()
	{
		$this->id = 0;
	}
}

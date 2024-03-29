<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Shared;


class ErrorModel
{
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $code;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	public function __construct()
	{
		$this->code = 0;
		$this->message = "";
	}
}

<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MultiAuthTester\MultipleAuthTester\Models\Shared;


class Car
{
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('numberPlate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $numberPlate;
    
	#[\JMS\Serializer\Annotation\SerializedName('ownerEmail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $ownerEmail;
    
    /**
     * $previousOwners
     * 
     * @var array<string> $previousOwners
     */
	#[\JMS\Serializer\Annotation\SerializedName('previousOwners')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $previousOwners;
    
	public function __construct()
	{
		$this->name = "";
		$this->numberPlate = "";
		$this->ownerEmail = "";
		$this->previousOwners = [];
	}
}

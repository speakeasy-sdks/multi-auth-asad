# Cars


## Overview

Car operations

### Available Operations

* [getCarsByCNIC](#getcarsbycnic) - Find cars by CNIC
* [getCarsById](#getcarsbyid) - Find cars by ID
* [getCarsByName](#getcarsbyname) - Find cars by Name

## getCarsByCNIC

Returns cars based on CNIC with apiKey and  httpBasic security

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared;
use \MultiAuthTester\MultipleAuthTester\Models\Operations;

$sdk = MultipleAuthTester\MultipleAuthTester::builder()->build();

try {
        $request = new Operations\GetCarsByCNICRequest();
    $request->cnic = '<value>';;

    $response = $sdk->cars->getCarsByCNIC($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest](../../Models/Operations/GetCarsByCNICRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICResponse](../../Models/Operations/GetCarsByCNICResponse.md)**


## getCarsById

Returns cars based on ID with apiKey or httpBasic security

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared;
use \MultiAuthTester\MultipleAuthTester\Models\Operations;

$sdk = MultipleAuthTester\MultipleAuthTester::builder()->build();

try {
        $request = new Operations\GetCarsByIdRequest();
    $request->id = 174472;;

    $requestSecurity = new Operations\GetCarsByIdSecurity();
    $requestSecurity->apiKey = '<YOUR_API_KEY_HERE>';

    $response = $sdk->cars->getCarsById($request, $requestSecurity);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdRequest](../../Models/Operations/GetCarsByIdRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdSecurity](../../Models/Operations/GetCarsByIdSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdResponse](../../Models/Operations/GetCarsByIdResponse.md)**


## getCarsByName

Returns cars based on NAME with apiKeyHeader and httpBasic security

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared;
use \MultiAuthTester\MultipleAuthTester\Models\Operations;

$sdk = MultipleAuthTester\MultipleAuthTester::builder()->build();

try {
        $request = new Operations\GetCarsByNameRequest();
    $request->name = '<value>';;

    $requestSecurity = new Operations\GetCarsByNameSecurity();
    $requestSecurity->apiKeyHeader = '<YOUR_API_KEY_HERE>';
    $requestSecurity->httpBasic->password = '<YOUR_PASSWORD_HERE>';
    $requestSecurity->httpBasic->username = '<YOUR_USERNAME_HERE>';

    $response = $sdk->cars->getCarsByName($request, $requestSecurity);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameRequest](../../Models/Operations/GetCarsByNameRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameSecurity](../../Models/Operations/GetCarsByNameSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameResponse](../../Models/Operations/GetCarsByNameResponse.md)**


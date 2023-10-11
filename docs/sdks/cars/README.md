# Cars
(*cars*)

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
require_once 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\Security;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic;
use \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest;

$security = new Security();
$security->apiKey = '';
$security->httpBasic->password = '';
$security->httpBasic->username = '';

$sdk = MultipleAuthTester::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCarsByCNICRequest();
    $request->cnic = 'Hill Jersey';

    $response = $sdk->cars->getCarsByCNIC($request);

    if ($response->cars !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest](../../models/operations/GetCarsByCNICRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICResponse](../../models/operations/GetCarsByCNICResponse.md)**


## getCarsById

Returns cars based on ID with apiKey or httpBasic security

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\Security;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic;
use \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdRequest;
use \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdSecurity;

$sdk = MultipleAuthTester::builder()
    ->build();

try {
    $request = new GetCarsByIdRequest();
    $request->id = 174472;

    $requestSecurity = new GetCarsByIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->cars->getCarsById($request, $requestSecurity);

    if ($response->cars !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdRequest](../../models/operations/GetCarsByIdRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdSecurity](../../models/operations/GetCarsByIdSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByIdResponse](../../models/operations/GetCarsByIdResponse.md)**


## getCarsByName

Returns cars based on NAME with apiKeyHeader and httpBasic security

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\Security;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic;
use \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameRequest;
use \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameSecurity;

$sdk = MultipleAuthTester::builder()
    ->build();

try {
    $request = new GetCarsByNameRequest();
    $request->name = 'modular Electric';

    $requestSecurity = new GetCarsByNameSecurity();
    $requestSecurity->apiKeyHeader = '';
    $requestSecurity->httpBasic->password = '';
    $requestSecurity->httpBasic->username = '';

    $response = $sdk->cars->getCarsByName($request, $requestSecurity);

    if ($response->cars !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameRequest](../../models/operations/GetCarsByNameRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameSecurity](../../models/operations/GetCarsByNameSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByNameResponse](../../models/operations/GetCarsByNameResponse.md)**


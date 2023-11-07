<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use MultiAuthTester\MultipleAuthTester;
use MultiAuthTester\MultipleAuthTester\Models\Shared;
use MultiAuthTester\MultipleAuthTester\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';
$security->httpBasic->password = '';
$security->httpBasic->username = '';

$sdk = MultipleAuthTester\MultipleAuthTester::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCarsByCNICRequest();
    $request->cnic = 'string';

    $response = $sdk->cars->getCarsByCNIC($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->
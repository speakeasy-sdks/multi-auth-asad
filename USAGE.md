<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use MultiAuthTester\MultipleAuthTester;
use MultiAuthTester\MultipleAuthTester\Models\Shared;
use MultiAuthTester\MultipleAuthTester\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';
$security->httpBasic->password = '<YOUR_PASSWORD_HERE>';
$security->httpBasic->username = '<YOUR_USERNAME_HERE>';

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
<!-- End SDK Example Usage [usage] -->
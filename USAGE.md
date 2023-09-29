<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \MultiAuthTester\MultipleAuthTester\MultipleAuthTester;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\Security;
use \MultiAuthTester\MultipleAuthTester\Models\Shared\SchemeHTTPBasic;
use \MultiAuthTester\MultipleAuthTester\Models\Operations\GetCarsByCNICRequest;

$sdk = MultipleAuthTester::builder()
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
<!-- End SDK Example Usage -->
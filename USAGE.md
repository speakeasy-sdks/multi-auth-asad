<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use MultiAuthTester\MultipleAuthTester;
use MultiAuthTester\MultipleAuthTester\Models\Shared;
use MultiAuthTester\MultipleAuthTester\Models\Operations;

$sdk = MultipleAuthTester\MultipleAuthTester::builder()->build();

try {
    $request = new Operations\GetCarsByCNICRequest();
    $request->cnic = '<value>';

    $response = $sdk->cars->getCarsByCNIC($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->
# multiauthtester/multipleauthtester

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/multi-auth-asad.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/bolt-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/multi-auth-asad.git"
        }
    ],
    "require": {
        "multiauthtester/multipleauthtester": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
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
    $request->cnic = 'corrupti';

    $response = $sdk->cars->getCarsByCNIC($request);

    if ($response->cars !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [cars](docs/sdks/cars/README.md)

* [getCarsByCNIC](docs/sdks/cars/README.md#getcarsbycnic) - Find cars by CNIC
* [getCarsById](docs/sdks/cars/README.md#getcarsbyid) - Find cars by ID
* [getCarsByName](docs/sdks/cars/README.md#getcarsbyname) - Find cars by Name
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
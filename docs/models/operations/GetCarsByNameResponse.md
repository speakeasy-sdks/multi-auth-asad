# GetCarsByNameResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `cars`                                                                                                       | array<[\MultiAuthTester\MultipleAuthTester\Models\Shared\Car](../../models/shared/Car.md)>                   | :heavy_minus_sign:                                                                                           | car response                                                                                                 |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `errorModel`                                                                                                 | [?\MultiAuthTester\MultipleAuthTester\Models\Shared\ErrorModel](../../models/shared/ErrorModel.md)           | :heavy_minus_sign:                                                                                           | error payload                                                                                                |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
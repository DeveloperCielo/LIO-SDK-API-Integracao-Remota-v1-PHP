# Swagger\Client\OrderManagementApi

All URIs are relative to *https://api.cielo.com.br/sandbox-lio/order-management/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderAddItem**](OrderManagementApi.md#orderAddItem) | **POST** /orders/{id}/items | 
[**orderCreate**](OrderManagementApi.md#orderCreate) | **POST** /orders | 
[**orderDelete**](OrderManagementApi.md#orderDelete) | **DELETE** /orders/{id} | 
[**orderDeleteItem**](OrderManagementApi.md#orderDeleteItem) | **DELETE** /orders/{id}/items/{itemId} | 
[**orderGet**](OrderManagementApi.md#orderGet) | **GET** /orders/{id} | 
[**orderGetByParameters**](OrderManagementApi.md#orderGetByParameters) | **GET** /orders | 
[**orderGetItem**](OrderManagementApi.md#orderGetItem) | **GET** /orders/{id}/items | 
[**orderGetTransactions**](OrderManagementApi.md#orderGetTransactions) | **GET** /orders/{id}/transactions | 
[**orderUpdate**](OrderManagementApi.md#orderUpdate) | **PUT** /orders/{id} | 
[**orderUpdateItem**](OrderManagementApi.md#orderUpdateItem) | **PUT** /orders/{id}/items/{itemId} | 


# **orderAddItem**
> \Swagger\Client\Model\Response orderAddItem($client_id, $access_token, $merchant_id, $id, $body)



Recurso responsável por efetuar a inclusão de um novo item em um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.
$body = new \Swagger\Client\Model\OrderItem(); // \Swagger\Client\Model\OrderItem | 

try {
    $result = $api_instance->orderAddItem($client_id, $access_token, $merchant_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderAddItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |
 **body** | [**\Swagger\Client\Model\OrderItem**](../Model/\Swagger\Client\Model\OrderItem.md)|  |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreate**
> \Swagger\Client\Model\Response orderCreate($client_id, $access_token, $merchant_id, $body)



Recurso responsável por efetuar a criação de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$body = new \Swagger\Client\Model\Order(); // \Swagger\Client\Model\Order | 

try {
    $result = $api_instance->orderCreate($client_id, $access_token, $merchant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **body** | [**\Swagger\Client\Model\Order**](../Model/\Swagger\Client\Model\Order.md)|  |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDelete**
> orderDelete($client_id, $access_token, $merchant_id, $id)



Recurso responsável por efetuar a exclusão de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.

try {
    $api_instance->orderDelete($client_id, $access_token, $merchant_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |

### Return type

void (empty response body)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeleteItem**
> \Swagger\Client\Model\Response orderDeleteItem($client_id, $access_token, $merchant_id, $id, $item_id)



Recurso responsável por efetuar a exclusão de um item de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.
$item_id = "item_id_example"; // string | Identificador do item do pedido.

try {
    $result = $api_instance->orderDeleteItem($client_id, $access_token, $merchant_id, $id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderDeleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |
 **item_id** | **string**| Identificador do item do pedido. |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGet**
> \Swagger\Client\Model\Order orderGet($client_id, $access_token, $merchant_id, $id)



Recurso responsável por efetuar a consulta de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.

try {
    $result = $api_instance->orderGet($client_id, $access_token, $merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetByParameters**
> orderGetByParameters($client_id, $access_token, $merchant_id, $parameters)



Recurso responsável por efetuar a consulta de pedidos, com a possibilidade de aplicar filtros.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$parameters = "parameters_example"; // string | Parâmetros para filtrar a consulta. Os possíveis parâmetros são: number (Número do pedidos), reference (Referência do pedido) e status (Status do pedidos: DRAFT, ENTERED, CANCELED, PAID, APPROVED, REJECTED, RE-ENTERED e CLOSED).

try {
    $api_instance->orderGetByParameters($client_id, $access_token, $merchant_id, $parameters);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderGetByParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **parameters** | **string**| Parâmetros para filtrar a consulta. Os possíveis parâmetros são: number (Número do pedidos), reference (Referência do pedido) e status (Status do pedidos: DRAFT, ENTERED, CANCELED, PAID, APPROVED, REJECTED, RE-ENTERED e CLOSED). |

### Return type

void (empty response body)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetItem**
> \Swagger\Client\Model\OrderItem orderGetItem($client_id, $access_token, $merchant_id, $id)



Recurso responsável por efetuar a consulta de um item em um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.

try {
    $result = $api_instance->orderGetItem($client_id, $access_token, $merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |

### Return type

[**\Swagger\Client\Model\OrderItem**](../Model/OrderItem.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetTransactions**
> \Swagger\Client\Model\Transaction orderGetTransactions($client_id, $access_token, $merchant_id, $id)



Recurso responsável por efetuar a consulta das transações de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.

try {
    $result = $api_instance->orderGetTransactions($client_id, $access_token, $merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderGetTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdate**
> orderUpdate($client_id, $access_token, $merchant_id, $id, $operation)



Recurso responsável por efetuar o cancelamento de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.
$operation = "operation_example"; // string | Operação que deve ser executada. As possíveis operações são: cancel (cancelamento de um pedido), close (fechamento de um pedido), place (liberação de um pedido para pagamento).

try {
    $api_instance->orderUpdate($client_id, $access_token, $merchant_id, $id, $operation);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |
 **operation** | **string**| Operação que deve ser executada. As possíveis operações são: cancel (cancelamento de um pedido), close (fechamento de um pedido), place (liberação de um pedido para pagamento). |

### Return type

void (empty response body)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdateItem**
> \Swagger\Client\Model\Response orderUpdateItem($client_id, $access_token, $merchant_id, $id, $item_id, $body)



Recurso responsável por efetuar a alteração de um item de um pedido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: merchant-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('merchant-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('merchant-id', 'Bearer');
// Configure API key authorization: access-token
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access-token', 'Bearer');
// Configure API key authorization: client-id
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client-id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client-id', 'Bearer');

$api_instance = new Swagger\Client\Api\OrderManagementApi();
$client_id = "client_id_example"; // string | Token da aplicação (APP Token) gerado durante o processo de cadastro.
$access_token = "access_token_example"; // string | Token de acesso (Access Token) gerado durante o processo de cadastro.
$merchant_id = "merchant_id_example"; // string | Identificador do estabelecimento comercial gerado durante o processo de cadastro.
$id = "id_example"; // string | Identificador do pedido.
$item_id = "item_id_example"; // string | Identificador do item do pedido.
$body = new \Swagger\Client\Model\OrderItem(); // \Swagger\Client\Model\OrderItem | 

try {
    $result = $api_instance->orderUpdateItem($client_id, $access_token, $merchant_id, $id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderUpdateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Token da aplicação (APP Token) gerado durante o processo de cadastro. |
 **access_token** | **string**| Token de acesso (Access Token) gerado durante o processo de cadastro. |
 **merchant_id** | **string**| Identificador do estabelecimento comercial gerado durante o processo de cadastro. |
 **id** | **string**| Identificador do pedido. |
 **item_id** | **string**| Identificador do item do pedido. |
 **body** | [**\Swagger\Client\Model\OrderItem**](../Model/\Swagger\Client\Model\OrderItem.md)|  |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[merchant-id](../../README.md#merchant-id), [access-token](../../README.md#access-token), [client-id](../../README.md#client-id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


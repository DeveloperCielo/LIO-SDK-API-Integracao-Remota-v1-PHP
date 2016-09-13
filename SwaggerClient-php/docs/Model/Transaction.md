# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID que identifica unicamente a transação. | 
**transaction_type** | **string** | Tipo da transação. | 
**status** | **string** | Status da transação. | 
**description** | **string** | Descrição da transação. | [optional] 
**terminal_number** | **int** | Número do terminal da Cielo Lio em que o pagamento foi realizado. | 
**card** | [**\Swagger\Client\Model\Card**](Card.md) |  | 
**number** | **int** | Número Sequencial Único (NSU) da transação. | 
**authorization_code** | **int** | Código de autorização da transação. | 
**payment_product** | [**\Swagger\Client\Model\PaymentProduct**](PaymentProduct.md) |  | 
**amount** | **string** | Valor da transação. Exemplo: O valor de R$ 10,00 é representado como 1000. | 
**created_at** | [**\DateTime**](\DateTime.md) | Data da criação/inclusão do item no pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z) | 
**updated_at** | [**\DateTime**](\DateTime.md) | Data da última atualização do item no pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



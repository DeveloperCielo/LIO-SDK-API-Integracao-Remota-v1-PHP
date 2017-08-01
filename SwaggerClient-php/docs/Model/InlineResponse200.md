# InlineResponse200

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID que identifica unicamente o pedido. | 
**number** | **string** | Número do pedido. Gerelmente esse número representa o identificador do pedido em um sistema externo através da integração com parceiros. | [optional] 
**reference** | **string** | Referência do pedido. Utilizada para facilitar o acesso ou localização do mesmo. | [optional] 
**status** | **string** | Status do pedido. | 
**created_at** | [**\DateTime**](\DateTime.md) | Data de criação do pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z) | 
**updated_at** | [**\DateTime**](\DateTime.md) | Data de última atualização do pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z) | 
**items** | [**\Swagger\Client\Model\OrdersItems[]**](OrdersItems.md) | Lista de itens contidos no pedido. | 
**notes** | **string** | Campo disponível para uso do Merchant para comunicação. | [optional] 
**transactions** | [**\Swagger\Client\Model\OrdersTransactions[]**](OrdersTransactions.md) | Lista de transações de pagamento (ou outros tipos) efetuadas no pedido. | 
**price** | **int** | Valor total do pedido. Exemplo: O valor de R$ 10,00 é representado como 1000. | 
**remaining** | **int** | Valor restante do pagamento do pedido.Exemplo: O valor de R$ 10,00 é representado como 1000. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



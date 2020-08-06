# ProductInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Can be used by the merchant to assign their own internal ID to an invoice. | [optional] 
**pos_data** | **string** | A passthru variable provided by the merchant and designed to be used by the merchant to correlate the invoice with an order or other object in their system. This passthru variable can be a serialized object, e.g.: | [optional] 
**item_desc** | **string** | Invoice description - will be added as a line item on the checkout page, under the merchant name | [optional] 
**item_code** | **string** | An item code, for a specific product code that is being paid for. Usually used in conjunction with the POS/Crowdfund apps | [optional] 
**physical** | **bool** | Whether it was a physical purchase | [optional] 
**tax_included** | **string** | How much tax is included in the invoice amount | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


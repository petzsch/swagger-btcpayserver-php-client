# CreateInvoiceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | The amount of the invoice | [optional] 
**customer_email** | **string** | The email of the customer. If the store is configured to ask for a refund email, the checkout UI will prompt for one when not provided. | [optional] 
**currency** | **string** | The currency the invoice will use | [optional] 
**metadata** | **string** | Additional information around the invoice that can be supplied.&lt;br/&gt; You can pass a json body with values of &#x60;ProductInformation&#x60; &#x60;BuyerInformation&#x60; which will populate the fields to stay compatible with previous workflows (and bitpay invoice api)./&gt; | [optional] 
**checkout** | [**OneOfCreateInvoiceRequestCheckout**](OneOfCreateInvoiceRequestCheckout.md) | Additional settings to customize the checkout flow | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


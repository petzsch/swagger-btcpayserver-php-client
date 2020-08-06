# CheckoutOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**speed_policy** | [**OneOfCheckoutOptionsSpeedPolicy**](OneOfCheckoutOptionsSpeedPolicy.md) | This is a risk mitigation parameter for the merchant to configure how they want to fulfill orders depending on the number of block confirmations for the transaction made by the consumer on the selected cryptocurrency | [optional] 
**payment_methods** | **string[]** | A specific set of payment methods to use for this invoice | [optional] 
**redirect_automatically** | **bool** | Whether to redirect to the redirectUri automatically after the invoice has been paid. Default to the store setting (which is &#x60;false&#x60; by default) | [optional] 
**redirect_uri** | **string** | This is the URL for a return link that is displayed on the receipt, to return the shopper back to your website after a successful purchase. This could be a page specific to the order, or to their account. | [optional] 
**web_hook** | **string** | A URL to send webhook notification to. Sent when the status changes or a payment is detected | [optional] 
**expiration_time** | [**\DateTime**](\DateTime.md) | When the invoice expires. By default will use the store settings (which is set to 15 minutes by default) | [optional] 
**payment_tolerance** | **string** | A percentage dtermining whether to count the invoice as paid when the invoice is paid within the specified margin of error | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


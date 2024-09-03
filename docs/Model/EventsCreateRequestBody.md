# # EventsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | **string** | Event name. This is the same name that you used to define a custom event in the **Dashboard** &gt; **Project Settings** &gt; **Event Schema**. | [optional]
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  |
**referral** | [**\OpenAPI\Client\Model\EventsCreateRequestBodyReferral**](EventsCreateRequestBodyReferral.md) |  | [optional]
**loyalty** | [**\OpenAPI\Client\Model\EventsCreateRequestBodyLoyalty**](EventsCreateRequestBodyLoyalty.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the event. A set of key/value pairs that you can attach to an event object. It can be useful for storing additional information about the event in a structured format. Event metadata schema is defined in the **Dashboard** &gt; **Project Settings** &gt; **Event Schema** &gt; **Edit particular event** &gt; **Metadata property definition**. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

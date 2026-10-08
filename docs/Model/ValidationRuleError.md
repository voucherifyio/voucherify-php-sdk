# # ValidationRuleError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Legacy single-language error message. Used when &#x60;mode&#x60; is omitted. In &#x60;MESSAGES&#x60; mode, used when neither the requested language nor the default language has a translation. | [optional]
**mode** | **string** | Selects how the custom error is defined. &#x60;MESSAGES&#x60; stores per-language text in &#x60;messages&#x60;. &#x60;LIBRARY&#x60; references an Error Message Library entry in &#x60;library&#x60;. Omit &#x60;mode&#x60; to use the legacy &#x60;message&#x60; field only. | [optional]
**messages** | **array<string,string>** | Per-language custom messages keyed by language code (&#x60;en&#x60;, &#x60;pl&#x60;, &#x60;en-US&#x60;). Required when &#x60;mode&#x60; is &#x60;MESSAGES&#x60;. Must be omitted or &#x60;null&#x60; when &#x60;mode&#x60; is &#x60;LIBRARY&#x60;. | [optional]
**library** | [**\OpenAPI\Client\Model\ValidationRuleErrorLibrary**](ValidationRuleErrorLibrary.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

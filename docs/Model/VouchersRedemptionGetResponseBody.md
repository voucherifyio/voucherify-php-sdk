# # VouchersRedemptionGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quantity** | **int** | The maximum number of times a voucher can be redeemed. | [optional]
**redeemedQuantity** | **int** | The number of times the voucher was redeemed successfully. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about redemptions in a dictionary. | [optional] [default to 'list']
**url** | **string** | URL | [optional]
**dataRef** | **string** | Identifies the name of the attribute that contains the array of &#x60;redemption_entries&#x60;. | [optional] [default to 'redemption_entries']
**total** | **int** | Total number of redemption objects. | [optional]
**redemptionEntries** | [**\OpenAPI\Client\Model\RedemptionEntry[]**](RedemptionEntry.md) | Contains the array of successful and failed redemption objects. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

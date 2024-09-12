# # BusValRuleAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for a assignment | [optional]
**ruleId** | **string** | The unique identifier for a rule | [optional]
**relatedObjectId** | **string** | The unique identifier for a related object | [optional]
**relatedObjectType** | **string** | The type of related object | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the object was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the object was last updated in ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'validation_rules_assignment']
**validationStatus** | **string** | The validation status of the assignment | [optional]
**validationOmittedRules** | **string[]** | The list of omitted rules | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

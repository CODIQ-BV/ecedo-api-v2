# EcedoERPCRMInterfaceApiInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_id** | **string** |  | [optional] 
**cluster_id** | **string** |  | [optional] 
**cluster_reference** | **string** |  | [optional] 
**invoice_id** | **string** |  | [optional] 
**invoice_type** | **string** |  | [optional] 
**invoice_type_localized** | **string** |  | [optional] 
**invoice_sub_type** | **string** |  | [optional] 
**invoice_sub_type_localized** | **string** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**payment_due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoice_number** | **string** |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**period_description** | **string** |  | [optional] 
**amount** | **double** |  | [optional] 
**vat_amount** | **double** |  | [optional] 
**total_amount** | **double** |  | [optional] 
**status** | **string** |  | [optional] 
**status_localized** | **string** |  | [optional] 
**invoice_document_id** | **string** |  | [optional] 
**is_credit** | **bool** |  | [optional] 
**credited_invoice_id** | **string** |  | [optional] 
**is_final** | **bool** |  | [optional] 
**is_olev** | **bool** |  | [optional] 
**settlement_invoice_frequency** | **string** |  | [optional] 
**settlement_invoice_frequency_localized** | **string** |  | [optional] 
**parent_invoice_id** | **string** |  | [optional] 
**collective_invoice_type** | **string** |  | [optional] 
**collective_invoice_type_localized** | **string** |  | [optional] 
**child_invoice_ids** | **string[]** |  | [optional] 
**correction_invoice_id** | **string** |  | [optional] 
**corrected_invoice_ids** | **string[]** |  | [optional] 
**correction_invoice_type** | **string** |  | [optional] 
**correction_invoice_type_localized** | **string** |  | [optional] 
**invoice_documents** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument[]**](EcedoERPCRMInterfaceApiDocument.md) |  | [optional] 
**has_invoice_usage_calculation_rows** | **bool** |  | [optional] 
**client_reference** | **string** | klant referentie naar een custom factuur indien opgegeven. Kan enkel gevuld zijn bij custom facturen | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



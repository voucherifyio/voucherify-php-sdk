<?php
/**
 * ParameterOrderListPublications
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Voucherify API
 *
 * Voucherify promotion engine REST API. Please see https://docs.voucherify.io/docs for more details.
 *
 * The version of the OpenAPI document: v2018-08-01
 * Contact: support@voucherify.io
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ParameterOrderListPublications Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum ParameterOrderListPublications: string
{
    case ID = 'id';

    case ID2 = '-id';

    case VOUCHER_CODE = 'voucher_code';

    case VOUCHER_CODE2 = '-voucher_code';

    case TRACKING_ID = 'tracking_id';

    case TRACKING_ID2 = '-tracking_id';

    case CUSTOMER_ID = 'customer_id';

    case CUSTOMER_ID2 = '-customer_id';

    case CREATED_AT = 'created_at';

    case CREATED_AT2 = '-created_at';

    case CHANNEL = 'channel';

    case CHANNEL2 = '-channel';

}



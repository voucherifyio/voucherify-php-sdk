<?php
/**
 * ParameterOrder
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
 * ParameterOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum ParameterOrder: string
{
    case CREATED_AT = 'created_at';

    case CREATED_AT2 = '-created_at';

    case UPDATED_AT = 'updated_at';

    case UPDATED_AT2 = '-updated_at';

    case TYPE = 'type';

    case TYPE2 = '-type';

    case CODE = 'code';

    case CODE2 = '-code';

    case CAMPAIGN = 'campaign';

    case CAMPAIGN2 = '-campaign';

    case CATEGORY = 'category';

    case CATEGORY2 = '-category';

}



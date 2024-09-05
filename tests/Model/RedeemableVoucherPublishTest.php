<?php
/**
 * RedeemableVoucherPublishTest
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * RedeemableVoucherPublishTest Class Doc Comment
 *
 * @category    Class
 * @description This object stores a summary of publish events: an events counter and an endpoint which can be called to return details of each event.  A publication is required for loyalty cards and referral codes. This object gets updated whenever a voucher has been published. Publication means assigning a code to a particular customer. Typically, a publication is made by distributing your codes to your customers, e.g. through Export to MailChimp or &lt;!-- [publish voucher](OpenAPI.json/paths/~1publications/post) --&gt;[publish voucher](ref:create-publication) API method.   &lt;!-- title: My Table Title --&gt;  | Required | Optional | | -------- | :------: | | &#x60;type&#x60;:&#x60;LOYALTY_CARD&#x60; |  &#x60;type&#x60;:&#x60;DISCOUNT_VOUCHER&#x60;   |  | &#x60;is_referral_code&#x60;:&#x60;true&#x60;      |    &#x60;type&#x60;:&#x60;GIFT_VOUCHER&#x60;   |
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RedeemableVoucherPublishTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "RedeemableVoucherPublish"
     */
    public function testRedeemableVoucherPublish()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "object"
     */
    public function testPropertyObject()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "count"
     */
    public function testPropertyCount()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "url"
     */
    public function testPropertyUrl()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}

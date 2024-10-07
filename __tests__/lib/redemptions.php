<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\RedemptionsApi;
use OpenAPI\Client\Model\FilterConditionsString;
use OpenAPI\Client\Model\OrderCalculated;
use OpenAPI\Client\Model\RedemptionsRedeemRequestBody;
use OpenAPI\Client\Model\RedemptionsRedeemRequestBodyRedeemablesItem;
use OpenAPI\Client\Model\RedemptionsRedeemResponseBody;
use OpenAPI\Client\Model\ParameterFiltersListRedemptions;
use OpenAPI\Client\Model\ParameterFiltersListRedemptionsVoucherCode;
use OpenAPI\Client\Model\RedemptionsListResponseBody;

function redeemStackedDiscounts(RedemptionsApi $redemptionsApiInstance, string | array $voucherIds): ?RedemptionsRedeemResponseBody
{
    $redemptions = new RedemptionsRedeemRequestBody();
    $order = new OrderCalculated();


    if (!is_array($voucherIds)) {
        $voucherIds = [$voucherIds];
    }

    $redeemables = array_map(
        function ($voucherId) {
            return createRedemptionsRequestBodyRedeemable($voucherId);
        },
        $voucherIds
    );

    $order->setAmount(20000);
    $redemptions->setOrder($order);
    $redemptions->setRedeemables($redeemables);

    try {
        $result = $redemptionsApiInstance->redeemStackedDiscounts($redemptions);
        return $result;
    } catch (Error $err) {
        error_log('Error during redeeming stacked discounts: ' . $err);
        return null;
    }
}

function createRedemptionsRequestBodyRedeemable($voucherId): RedemptionsRedeemRequestBodyRedeemablesItem
{
    $redeemable = new RedemptionsRedeemRequestBodyRedeemablesItem();
    $redeemable->setId($voucherId);
    $redeemable->setObject('voucher');
    return $redeemable;
}

function listRedemptions(RedemptionsApi $redemptionsApiInstance): ?RedemptionsListResponseBody
{
    try {
        $parameterFiltersListRedemptions = new ParameterFiltersListRedemptions();
        $parameterFiltersListRedemptionsVoucherCode = new ParameterFiltersListRedemptionsVoucherCode();
        $filterConditionsString = new FilterConditionsString();
        $filterConditionsString->setNotIn('123');

        $parameterFiltersListRedemptionsVoucherCode->setConditions($filterConditionsString);
        $parameterFiltersListRedemptions->setVoucherCode($parameterFiltersListRedemptionsVoucherCode);

        $redemptions = $redemptionsApiInstance->listRedemptions(null, null, null, null, null, null, null, $parameterFiltersListRedemptions);
        return $redemptions;
    } catch (Error $err) {
        error_log('Error during listing redemptions: ' . $err);
        return null;
    }
}

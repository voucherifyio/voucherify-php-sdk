<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\RedemptionsApi;
use OpenAPI\Client\Model\Order;
use OpenAPI\Client\Model\RedemptionsRedeemRequestBody;
use OpenAPI\Client\Model\RedemptionsRedeemResponseBody;
use OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem;

function redeemStackedDiscounts(RedemptionsApi $redemptionsApiInstance, string | array $voucherIds): ?RedemptionsRedeemResponseBody {
    $redemptions = new RedemptionsRedeemRequestBody();
    $order = new Order();


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

function createRedemptionsRequestBodyRedeemable($voucherId): StackableValidateRedeemBaseRedeemablesItem {
    $redeemable = new StackableValidateRedeemBaseRedeemablesItem();
    $redeemable->setId($voucherId);
    $redeemable->setObject('voucher');
    return $redeemable;
}
?>
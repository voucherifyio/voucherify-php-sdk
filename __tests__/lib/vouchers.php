<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\VouchersApi;
use OpenAPI\Client\Model\VouchersGetResponseBody;
use OpenAPI\Client\Model\VouchersBalanceUpdateRequestBody;
use OpenAPI\Client\Model\VouchersBalanceUpdateResponseBody;
use OpenAPI\Client\Model\VouchersDisableResponseBody;
use OpenAPI\Client\Model\VouchersEnableResponseBody;

function getVoucher(VouchersApi $vouchersApiInstance, string $voucherCode): ?VouchersGetResponseBody {
    try {
        $voucher = $vouchersApiInstance->getVoucher($voucherCode);
        return $voucher;
    } catch (Error $err) {
        error_log('Error during getting previously created voucher: ' . $err);
        return null;
    }
}

function disableVoucher(VouchersApi $vouchersApiInstance, string $voucherCode): ?VouchersDisableResponseBody {
    try {
        $disabledVoucher = $vouchersApiInstance->disableVoucher($voucherCode);
        return $disabledVoucher;
    } catch (Error $err) {
        error_log('Error during getting previously created voucher: ' . $err);
        return null;
    }
}

function enableVoucher(VouchersApi $vouchersApiInstance, string $voucherCode): ?VouchersEnableResponseBody {
    try {
        $enabledVoucher = $vouchersApiInstance->enableVoucher($voucherCode);
        return $enabledVoucher;
    } catch (Error $err) {
        error_log('Error during getting previously created voucher: ' . $err);
        return null;
    }
}

function updateLoyaltyCardbalance(VouchersApi $vouchersApiInstance, string $voucherCode): ?VouchersBalanceUpdateResponseBody {
    $loyaltyCard = new VouchersBalanceUpdateRequestBody();
    $loyaltyCard->setSourceId(generateRandomString());
    $loyaltyCard->setAmount(10000);
    $loyaltyCard->setReason("Regular customer");
    try {
        $updatedLoyaltyCard = $vouchersApiInstance->updateVoucherBalance($voucherCode, $loyaltyCard);
        return $updatedLoyaltyCard;
    } catch (Error $err) {
        error_log('Error during getting previously created voucher: ' . $err);
        return null;
    }
}
 
?>
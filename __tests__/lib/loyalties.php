<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\LoyaltiesApi;
use OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateRequestBody;
use OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateResponseBody;
use OpenAPI\Client\Model\LoyaltiesMembersTransactionsListResponseBody;

function updateLoyaltyMemberCardbalance(LoyaltiesApi $loyaltiesApiInstance, string $memberId): ?LoyaltiesMembersBalanceUpdateResponseBody {
    $loyaltyCard = new LoyaltiesMembersBalanceUpdateRequestBody();
    $loyaltyCard->setPoints(2000);

    try {
        $updatedLoyaltyCard = $loyaltiesApiInstance->updateLoyaltyCardBalance($memberId, $loyaltyCard);
        return $updatedLoyaltyCard;
    } catch (Error $err) {
        error_log('Error during updating loyalty member card balance: ' . $err);
        return null;
    }
}   

function listLoyaltyMemberCardTransactions(LoyaltiesApi $loyaltiesApiInstance, string $memberId): ?LoyaltiesMembersTransactionsListResponseBody {
    try {
        $transactions = $loyaltiesApiInstance->listLoyaltyCardTransactions($memberId, 10, 1);
        return $transactions;
    } catch (Error $err) {
        error_log('Error during listing loyalty member card transactions: ' . $err);
        return null;
    }
}
 
?>
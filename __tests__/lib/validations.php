<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\ValidationsApi;
use OpenAPI\Client\Model\Customer;
use OpenAPI\Client\Model\Order;
use OpenAPI\Client\Model\ValidationsValidateRequestBody;
use OpenAPI\Client\Model\ValidationsValidateResponseBody;
use OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem;
use OpenAPI\Client\Model\OrderItem;
use OpenAPI\Client\Model\OrderItemCalculatedProduct;

function validateStackedDiscounts(ValidationsApi $validationsApiInstance, string | array $voucherIds, string $productId, $customer, int $amount): ?ValidationsValidateResponseBody {
    $validations = new ValidationsValidateRequestBody();
    $customerObject = new Customer();
    $order = new Order();
    $product = new OrderItemCalculatedProduct();
    $orderItem = new OrderItem();

    if (!is_array($voucherIds)) {
        $voucherIds = [$voucherIds];
    }

    $redeemables = array_map(
        function ($voucherId) {
            return createValidationsRequestBodyRedeemable($voucherId);
        },
        $voucherIds
    );

    $orderItem->setRelatedObject("product");
    $orderItem->setQuantity(1);
    $orderItem->setDiscountQuantity(1);
    $orderItem->setAmount($amount);
    $orderItem->setPrice($amount);
    $orderItem->setProductId($productId);
    
    $product->setId($productId);
    $orderItem->setProduct($product);

    $customerObject->setSourceId($customer->source_id);

    $order->setItems([$orderItem]);
    $order->setAmount($amount);
    $order->setCustomer($customerObject);


    $validations->setRedeemables($redeemables);
    $validations->setOrder($order);
    $validations->setCustomer($customerObject);

    try {
        $result = $validationsApiInstance->validateStackedDiscounts($validations);
        return $result;
    } catch (Error $err) {
        error_log('Error during validating stacked discounts: ' . $err);
        return null;
    }
}

function createValidationsRequestBodyRedeemable($voucherId): StackableValidateRedeemBaseRedeemablesItem {
    $redeemable = new StackableValidateRedeemBaseRedeemablesItem();
    $redeemable->setId($voucherId);
    $redeemable->setObject('voucher');
    return $redeemable;
}
?>
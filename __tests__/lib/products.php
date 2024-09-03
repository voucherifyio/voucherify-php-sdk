<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\ProductsApi;
use OpenAPI\Client\Model\ProductsCreateRequestBody;
use OpenAPI\Client\Model\ProductsCreateResponseBody;
use \OpenAPI\Client\Model\ProductsGetResponseBody;
use \OpenAPI\Client\Model\ProductsUpdateRequestBody;
use \OpenAPI\Client\Model\ProductsUpdateResponseBody;
use \OpenAPI\Client\Model\ProductsUpdateInBulkRequestBody;
use \OpenAPI\Client\Model\ProductsUpdateInBulkResponseBody;
use \OpenAPI\Client\Model\ProductsMetadataUpdateInBulkRequestBody;
use \OpenAPI\Client\Model\ProductsMetadataUpdateInBulkResponseBody;
use \OpenAPI\Client\Model\ProductsSkusCreateRequestBody;
use \OpenAPI\Client\Model\ProductsSkusCreateResponseBody;
use \OpenAPI\Client\Model\ProductsSkusUpdateRequestBody;
use \OpenAPI\Client\Model\ProductsSkusUpdateResponseBody;
use \OpenAPI\Client\Model\Error;

    function createProduct(ProductsApi $productsApiInstance, int $price): ?ProductsCreateResponseBody {
        $product = new ProductsCreateRequestBody();
        $product -> setSourceId(generateRandomString());
        $product -> setName(generateRandomString());
        $product -> setPrice($price);
        $product -> setAttributes(['color', 'memory', 'processor']);

        try {
            $createdProduct = $productsApiInstance -> createProduct($product);
            return $createdProduct;
        } catch (Error $err) {
            error_log('Error during creating product: ' . $err);
            return null;
        }
    }

    function getProduct(ProductsApi $productsApiInstance, string $productId): ?ProductsGetResponseBody {
        try {
            $product = $productsApiInstance -> getProduct($productId);
            return $product;
        } catch (Error $err) {
            error_log('Error during getting product: ' . $err);
            return null;
        }
    }

    function updateProduct(ProductsApi $productsApiInstance, string $sourceId): ?ProductsUpdateResponseBody {
        $product = new ProductsUpdateRequestBody();
        $product->setPrice(55000);
        $product->setPrice(55000);

        try {
            $updatedProduct = $productsApiInstance->updateProduct($sourceId, $product);
            return $updatedProduct;
        } catch (Error $err) {
            error_log('Error during updating product: ' . $err);
            return null;
        }
    }

    function updateProductsInBulk(ProductsApi $productsApiInstance): ?ProductsUpdateInBulkResponseBody {
        $product1 = new ProductsUpdateInBulkRequestBody();
        $product1->setSourceId(generateRandomString());
        $product1->setPrice(1000);

        $product2 = new ProductsUpdateInBulkRequestBody();
        $product2->setSourceId(generateRandomString());
        $product2->setPrice(2000);

        $updatedProducts = [$product1, $product2];

        try {
            $productsUpdatedInBulk = $productsApiInstance->updateProductsInBulk($updatedProducts);
            return $productsUpdatedInBulk; 
        } catch (Error $err) {
            error_log('Error during updating products in bulk: ' . $err);
            return null;
        }
    }

    function updateProductsMetadataInBulk(ProductsApi $productsApiInstance, array $productIds): ?ProductsMetadataUpdateInBulkResponseBody {
        $products = new ProductsMetadataUpdateInBulkRequestBody();
        $products->setSourceIds($productIds);
        $products->setMetadata((object) ["key1" => "value1", "key2" => "value2"]);

        try {
            $updatedProductsMetadata = $productsApiInstance->updateProductsMetadataInBulk($products);
            return $updatedProductsMetadata;
        } catch (Error $err) {
            error_log('Error during updating products metadatas in bulk: ' . $err);
            return null;
        }
    }

    function createSku(ProductsApi $productsApiInstance, string $sourceId, int $price): ?ProductsSkusCreateResponseBody {
        $sku = new ProductsSkusCreateRequestBody();
        $sku->setSourceId(generateRandomString());
        $sku->setPrice($price);
        $sku->setAttributes((object) [
            "color" => "red",
            "memory" => "16GB",
            "processor" => "Intel Core i7"
        ]);

        try {
            $createdSku = $productsApiInstance->createSku($sourceId, $sku);
            return $createdSku;
        } catch (Error $err) {
            error_log('Error during creating product sku: ' . $err);
            return null;
        }
    }

    function updateSku(ProductsApi $productsApiInstance, string $sourceId, string $skuId, int $price): ?ProductsSkusUpdateResponseBody {
        $sku = new ProductsSkusUpdateRequestBody();
        $sku->setPrice($price);

        try {
            $updatedSku = $productsApiInstance->updateSku($sourceId, $skuId, $sku);
            return $updatedSku;
        } catch (Error $err) {
            error_log('Error during updating product sku: ' . $err);
            return null;
        }
    }

    function deleteProduct(ProductsApi $productsApiInstance, string $productId) {
        try {
            $deletedProduct = $productsApiInstance->deleteProduct($productId, true);
            return $deletedProduct;
        } catch (Error $err) {
            error_log('Error during deleting product: ' . $err);
            return null;
        }

    }

    function deleteSku(ProductsApi $productsApiInstance, string $productId, string $skuId) {
        try {
            $deletedSku = $productsApiInstance->deleteSku($productId, $skuId, true);
            return $deletedSku;
        } catch (Error $err) {
            error_log('Error during deleting product sku: ' . $err);
            return null;
        }
    }
?>
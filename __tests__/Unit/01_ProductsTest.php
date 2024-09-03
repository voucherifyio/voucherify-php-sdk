<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/products.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';


use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    private $productsApiInstance;
    private $voucherify;

    protected function setUp(): void {
        $this->productsApiInstance = Config::productsApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreatedProductWithPrice2000AndPrice60000() { 

        $createdProduct = createProduct($this->productsApiInstance, 20000);
        $createdProduct2 = createProduct($this->productsApiInstance, 60000);

        $snapshot = 'products/createdProduct';
        $snapshot2 = 'products/createdProduct2';
        $keysToRemove = ['id', 'source_id', 'name', 'created_at'];
        
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdProduct, $keysToRemove);
        [$filteredSnapshot2, $filteredResponse2] = validatePayloads($snapshot2, $createdProduct2, $keysToRemove);    

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating product');
        $this->assertEquals($filteredSnapshot2, $filteredResponse2, 'Error during test with creating product 2');

        $createdProductJSON = json_decode($createdProduct);

        $this->voucherify->setProduct($createdProductJSON);
        $this->voucherify->addProductId($createdProductJSON->source_id);
    }

    public function testGetPreviouslyCreatedProduct() {
        $product = getProduct($this->productsApiInstance, $this->voucherify->getProduct()->source_id);

        $snapshot = 'products/createdProduct';
        $keysToRemove = ['id', 'source_id', 'name', 'created_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $product, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with getting product');
    }

    public function testUpdatedProductToPrice55000() {
        $updatedProduct = updateProduct($this->productsApiInstance, $this->voucherify->getProduct()->source_id);

        $snapshot = 'products/updatedProduct';
        $keysToRemove = ['id', 'source_id', 'created_at', 'updated_at', 'name'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $updatedProduct, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with updating product');
    }

    public function testListedProducts() {
        $products = $this->productsApiInstance->listProducts(2);
        $productsJson = json_decode($products);

        $this->assertNotNull($products);
        $this->assertGreaterThan(0, count($productsJson->products));
    }

    public function testUpdatedProductsInBulk() {
        $updatedProductsInBulk = updateProductsInBulk($this->productsApiInstance);

        $this->assertNotNull($updatedProductsInBulk);
    }

    public function testUpdatedMetadataInBulk() {   
        $updatedProductsMetadatas = updateProductsMetadataInBulk($this->productsApiInstance, $this->voucherify->getProductIds());

        $this->assertNotNull($updatedProductsMetadatas);
    }

    public function testAddedSkuToProductWithPrice5000() {
        $createdSku = createSku($this->productsApiInstance, $this->voucherify->getProduct()->source_id, 5000);

        $snapshot = 'products/createdSku';
        $keysToRemove = ['id', 'created_at', 'product_id', 'source_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdSku, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating product sku');

        $createdSkuJSON = json_decode($createdSku);
        $this->voucherify->setSku($createdSkuJSON);
    }

    public function testUpdatedProductSkuWithPrice2000() {
        $sourceId = $this->voucherify->getProduct()->source_id;
        $sku = $this->voucherify->getSku()->source_id;
        $updatedSku = updateSku($this->productsApiInstance, $sourceId, $sku, 2000);

        $snapshot = 'products/updatedSku';
        $keysToRemove = ['id', 'source_id', 'product_id', 'created_at', 'updated_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $updatedSku, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with updating product sku');
    }

    public function testGetSku() {
        $sku = $this->productsApiInstance->getSku($this->voucherify->getSku()->source_id);

        $snapshot = 'products/getSku';
        $keysToRemove = ['id', 'source_id', 'product_id', 'created_at', 'updated_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $sku, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with getting sku');

    }

    public function testListSkusInProduct() {
        $skus = $this->productsApiInstance->listSkusInProduct($this->voucherify->getProduct()->source_id);

        $snapshot = 'products/listedSkusInProducts';
        $keysToRemove = ['id', 'source_id', 'product_id', 'created_at', 'updated_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $skus, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with listing skus in product');
    }
    
    public function testRemoveProductSku() {
        $productId = $this->voucherify->getProduct()->source_id;
        $skuId = $this->voucherify->getSku()->source_id;
        $deletedSku = deleteSku($this->productsApiInstance, $productId, $skuId);

        consoleLog($deletedSku);
        $this->assertNull($deletedSku);
    }

    public function testRemoveProduct() {
        $productId = $this->voucherify->getProduct()->source_id;
        $deletedProduct = deleteProduct($this->productsApiInstance, $productId);
        
        $this->assertNull($deletedProduct);
    }
    
}
?>

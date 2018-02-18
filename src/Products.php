<?php

namespace Voucherify;

class Products
{
    /**
     * @var \Voucherify\ApiClient
     */
    private $client;

    /**
     * @param \Voucherify\ApiClient $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param array|stdClass $product Product object
     * 
     * Create product.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($product)
    {
        return $this->client->post("/products/", $product);
    }

    /**
     * @param string $productId
     * 
     * Get product.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($productId)
    {
        return $this->client->get("/products/" . rawurlencode($productId));
    }

    /**
     * @param array|stdClass $params
     * 
     * List products.
     *
     * @throws \Voucherify\ClientException
     */
    public function getList($params = null)
    {
        return $this->client->get("/products/", $params);
    }

    /**
     * @param array|stdClass $product Product object
     * 
     * Update product.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($product)
    {
        $productId = "";

        if (is_array($product)) {
            $productId = $product["id"];
            unset($product["id"]);
        }
        elseif (is_object($product)) {
            $productId = $product->id;
            unset($product->id);
        }

        return $this->client->put("/products/" . rawurlencode($productId), $product);
    }

    /**
     * @param string $productId
     * @param boolean|null $force
     * 
     * Delete product.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($productId, $force = null)
    {
        $options = (object)[];
        $options->qs = [ "force" => ($force ? "true" : "false") ];

        return $this->client->delete("/products/" . rawurlencode($productId), null, $options);
    }

    /**
     * @param string $productId
     * @param array|stdClass $sku Sku object
     * 
     * Create product's sku.
     *
     * @throws \Voucherify\ClientException
     */
    public function createSku($productId, $sku)
    {
        return $this->client->post("/products/" . rawurlencode($productId) . "/skus", $sku);
    }

    /**
     * @param string $productId
     * @param string $skuId
     * 
     * Get product's sku.
     *
     * @throws \Voucherify\ClientException
     */
    public function getSku($productId, $skuId)
    {
        return $this->client->get("/products/" . rawurlencode($productId) . "/skus/" . rawurlencode($skuId));
    }

    /**
     * @param string $productId
     * 
     * List product's skus.
     *
     * @throws \Voucherify\ClientException
     */
    public function getSkus($productId)
    {
        return $this->client->get("/products/". rawurlencode($productId) . "/skus/");
    }

    /**
     * @param string $productId
     * @param array|stdClass $sku Product's sku object
     * 
     * Update product's sku.
     *
     * @throws \Voucherify\ClientException
     */
    public function updateSku($productId, $sku)
    {
        $skuId = "";

        if (is_array($sku)) {
            $skuId = $sku["id"];
            unset($sku["id"]);
        }
        elseif (is_object($sku)) {
            $skuId = $sku->id;
            unset($sku->id);
        }

        return $this->client->put("/products/" . rawurlencode($productId) . "/skus/" . rawurlencode($skuId), $sku);
    }

    /**
     * @param string $productId
     * @param string $skuId
     * @param boolean|null $force
     * 
     * Delete product's sku.
     *
     * @throws \Voucherify\ClientException
     */
    public function deleteSku($productId, $skuId, $force = null)
    {
        $options = (object)[];
        $options->qs = [ "force" => ($force ? "true" : "false") ];

        return $this->client->delete("/products/" . rawurlencode($productId) . "/skus/" . rawurlencode($skuId), null, $options);
    }
}



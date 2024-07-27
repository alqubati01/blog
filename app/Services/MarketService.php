<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumesExternalServices;
use App\Traits\InteractsWithMarketResponses;

class MarketService
{
    use ConsumesExternalServices, AuthorizesMarketRequests, InteractsWithMarketResponses;

    /**
     * The URL to send the requests
     * @var string
     */
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.market.base_uri');
    }


    public function getPosts()
    {
        return $this->makeRequest('GET', '/api/posts');
    }


    public function getPost($id)
    {
        return $this->makeRequest('GET', "/api/posts/{$id}");
    }

    public function getTags()
    {
        return $this->makeRequest('GET', '/api/tags');
    }

    public function getTag($id)
    {
        return $this->makeRequest('GET', "/api/tags/{$id}");
    }

    public function getTagPosts($id)
    {
        return $this->makeRequest('GET', "/api/posts/tag/{$id}");
    }

    public function getCategories()
    {
        return $this->makeRequest('GET', '/api/categories');
    }

    public function getCategory($id)
    {
        return $this->makeRequest('GET', "/api/categories/{$id}");
    }

    public function getCategoryPosts($id)
    {
        return $this->makeRequest('GET', "/api/posts/category/{$id}");
    }

    /**
     * Publish a product on the API
     * @return stdClass
     */
    public function publishProduct($sellerId, $productData)
    {
        return $this->makeRequest(
            'POST',
            "sellers/{$sellerId}/products",
            [],
            $productData,
            [],
            $hasFile = true
        );
    }

    /**
     * Associate a product to the category
     * @return stdClass
     */
    public function setProductCategory($productId, $categoryId)
    {
        return $this->makeRequest(
            'PUT',
            "products/{$productId}/categories/{$categoryId}"
        );
    }

    /**
     * Update an existing product
     * @return sdtClass
     */
    public function updateProduct($sellerId, $productId, $productData)
    {
        $productData['_method'] = 'PUT';

        return $this->makeRequest(
            'POST',
            "sellers/{$sellerId}/products/{$productId}",
            [],
            $productData,
            [],
            $hasFile = isset($productData['picture'])
        );
    }

    /**
     * Allows to purchase a product
     * @return sydClass
     */
    public function purchaseProduct($productId, $buyerId, $quantity)
    {
        return $this->makeRequest(
            'POST',
            "products/{$productId}/buyers/{$buyerId}/transactions",
            [],
            ['quantity' => $quantity]
        );
    }

    /**
     * Obtains the a products from the API
     * @return stdClass
     */
    public function getCategoryProducts($id)
    {
        return $this->makeRequest('GET', "categories/{$id}/products");
    }

    /**
     * Retrieve the user information from the API
     * @return stdClass
     */
    public function getUserInformation()
    {
        return $this->makeRequest('GET', 'users/me');
    }


    /**
     * Obtains the list of purchases
     * @return stdClass
     */
    public function getPurchases($buyerId)
    {
        return $this->makeRequest('GET', "buyers/{$buyerId}/products");
    }

    /**
     * Obtains the list of publications
     * @return stdClass
     */
    public function getPublications($sellerId)
    {
        return $this->makeRequest('GET', "sellers/{$sellerId}/products");
    }
}

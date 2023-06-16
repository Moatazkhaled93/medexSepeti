<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Helpers\HttpStatusCodes;
use App\Http\Requests\Product\StoreProductsRequest;

class ProductController extends Controller
{

    public function index(ProductService $productService){
        try {
            $products = $productService->getAll();
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($products, 'get Products list successfully');
    }


    public function store(StoreProductsRequest $request, ProductService $productService){
        try {
            $product = $productService->create($request->validated());
        } catch (\Exception $exception) {
            return $this->response->error('', $exception->getMessage(), HttpStatusCodes::HTTP_BAD_REQUEST);
        }

        return $this->response->success($product, 'Product Created successfully');
    }



}

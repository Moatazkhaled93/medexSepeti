<?php

namespace App\Services;

use App\Repository\Eloquent\ProductRepository;



class ProductService
{
    private $productRepository;


    public function __construct(ProductRepository $productRepository)
    {

        $this->productRepository = $productRepository;

    }

    public function getAll()
    {

        return $this->productRepository->all();
    }

    public function create($data)
    {

        return $this->productRepository->create($data);
    }

}

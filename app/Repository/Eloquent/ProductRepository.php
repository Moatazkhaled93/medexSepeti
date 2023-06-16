<?php

namespace App\Repository\Eloquent;

use App\Repository\Eloquent\EloquentRepository;
use App\Models\Product;
/**
 * Description of UserRepository
 */
class ProductRepository extends EloquentRepository {


    public function getModelName(): string {
        return Product::class;
    }

}

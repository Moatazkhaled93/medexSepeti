<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'products';

    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'customer_id',
        'total_views'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function isNew(): bool
    {
        if (!$this->created_at)
        {
            return false;
        }

        return $this->created_at->isAfter(now()->subDay(3));
    }
}

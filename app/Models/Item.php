<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_code', 'item_name', 'description',
    ];

    public function borrowingDetails()
    {
        return $this->hasMany(BorrowingDetail::class, 'item_id');
    }
    
}
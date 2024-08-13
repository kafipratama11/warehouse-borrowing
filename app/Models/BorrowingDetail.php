<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'borrowing_id', 'item_id', 'item_status_id', 'quantity', 'return_date', 'description',
    ];

    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class, 'borrowing_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function itemStatus()
    {
        return $this->belongsTo(Status::class, 'item_status_id');
    }
    
}
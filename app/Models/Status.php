<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_name',
    ];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

    public function borrowingDetails()
    {
        return $this->hasMany(BorrowingDetail::class, 'item_status_id');
    }
}
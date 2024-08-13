<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $fillable = [
        'borrower_id', 'status_id', 'borrow_date', 'return_date', 'description',
    ];

    public function borrower()
    {
        return $this->belongsTo(User::class, 'borrower_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function borrowingDetails()
    {
        return $this->hasMany(BorrowingDetail::class, 'borrowing_id');
    }
    
}
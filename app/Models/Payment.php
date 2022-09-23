<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method',
        'transaction_id',
        'amount',
        'validity_in_months'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

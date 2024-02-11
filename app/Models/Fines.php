<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fines extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',
        'amount',
        'status',
        'deadline',
        'created_by',
        'updated_by',
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}

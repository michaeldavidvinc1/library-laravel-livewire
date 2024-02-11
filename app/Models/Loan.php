<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'user_id',
        'date_return',
        'status',
        'created_by',
        'updated_by',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function fine(){
        return $this->hasMany(Fines::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

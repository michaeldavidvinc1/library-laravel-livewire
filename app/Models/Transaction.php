<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['book_item_id', 'user_id', 'status', 'created_by', 'updated_by'];

    public function book_item()
    {
        return $this->belongsTo(BookItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loan(){
        return $this->hasMany(Loan::class);
    }
}

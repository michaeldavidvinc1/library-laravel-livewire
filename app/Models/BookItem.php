<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookItem extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, string $string2)
 */
class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    function category() {
        return $this->belongsTo(Category::class);
    }

    function borrow_details(){
        return $this->belongsToMany(BorrowDetails::class, 'borrow_details');
    }

    function borrow(){
        return $this->hasOne(Borrow::class, 'borrow_id');
    }
}

?>

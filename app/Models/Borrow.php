<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @method static findOrFail($id)
 * @method static onlyTrashed()
 * @method static withTrashed()
 */
class Borrow extends Model
{
    use HasFactory;
    use Notifiable,
        SoftDeletes;
    function borrow_details(){
        return $this->belongsToMany(BorrowDetails::class, 'borrow_details');
    }

    function student(){
        return $this->belongsTo(Student::class);
    }


    function book(){
        return $this->belongsTo(Book::class, 'book_id');
    }
}

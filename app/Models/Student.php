<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Student extends Model
{
    use HasFactory;
    protected $table = 'students';


    function borrow(){
        return $this->belongsTo(Borrow::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';//mendefinisikan nama table
    protected $primaryKey ='id';//mendefinikan kolom PK
    //digunakan jika primarykey tidak auto increment
    // public $incrementing = false;
    //digunakan jika tidak ada kolom create_at dan update_at
    // public $timestamp = false; 
}

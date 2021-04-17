<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //ketika nama tabel berbeda
    protected $table = 'courses';
    // ketika kolom primaryKey bukan id, maka
    // tentukan nama kolom primaryKey nya.
    protected $primaryKey = 'id';
}

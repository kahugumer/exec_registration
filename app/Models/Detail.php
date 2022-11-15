<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['first_name','middle_name','surname','email','email2','phone','institution','qualification','course','duration_of_study','year_of_leadership'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'CEO',
        'foundation_date',
        'prod_category_id'
    ];

}

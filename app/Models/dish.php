<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;
    protected $table='dishes';
    protected $fillable = ['name','image','price','sale_price','sale_date','dish_category_id'];
}

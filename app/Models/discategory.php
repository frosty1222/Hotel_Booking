<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class discategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table ='discategories';
    protected $fillable = ['dish_type','available_quantity'];
}

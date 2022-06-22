<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class room extends Model
{
    use HasFactory;
    protected $table ='rooms';
    protected $fillable = ['type','image','price','sale_price','sale_date','category_id'];
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}

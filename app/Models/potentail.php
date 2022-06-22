<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class potentail extends Model
{
    use HasFactory;
    protected $table='potentails';
    Protected $fillable = ['email'];
}

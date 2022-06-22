<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $fillable = ['name','phone','email','type_room','date_check_in','date_check_out','adult','children','message','room_id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}

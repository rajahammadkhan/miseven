<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    use HasFactory;
    
    protected $connection = "web";

    protected $table = "carousel";

    protected $fillable = ['image', 'status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{
    use HasFactory;
    protected $connection = "web";

    protected $table = "our_services";

    protected $fillable = ['image', 'heading','description', 'status'];

}

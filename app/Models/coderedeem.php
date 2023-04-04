<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coderedeem extends Model
{
    use HasFactory;

    protected $table = 'coderedeem';
    protected $fillable = [
        'code',
    ];
}

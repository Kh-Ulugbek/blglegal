<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function initial()
    {
        return [
            'SSI',
            'SSD',
            'Public Assistance'
        ];
    }
}

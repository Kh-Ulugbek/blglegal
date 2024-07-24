<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injure extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function initial()
    {
        return [
            'Neck',
            'Left Shoulder',
            'Right Shoulder',
            'Left Hip',
            'Right Hip',
            'Back',
            'Left Knee',
            'Right Knee',
            'Left Hand',
            'Right Hand'
        ];
    }
}

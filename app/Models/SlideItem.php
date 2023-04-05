<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'slide_id'
    ];


    public function Slide()
    {
        return $this->hasMany(Slide::class);

    }
}

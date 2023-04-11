<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'email',
        'phone',
        'facebook',
        'twitter',
        'snap',
        'instagram',
        ] ;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commonQuestions extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer',
        'question'
    ];
}

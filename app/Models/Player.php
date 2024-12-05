<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'username',
        'email',
        'password',
        'year_level',
        'student_id_number',
        'section_id'
    ];

    public function section(): BelongsTo
    {
        return $this->belongsto(Section::class, 'section_id');
    }
}
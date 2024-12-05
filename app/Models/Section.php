<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_name'
    ];

    public function player(): Hasone
    {
        return $this->hasone(Player::class, 'section_id');
    }
}

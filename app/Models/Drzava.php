<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
    public const TABLE = 'drzava';

    protected $table = self::TABLE;

    protected $fillable = [
        'naziv'
    ];

    public function ponude() {
        return $this->hasMany(Ponuda::class);
    }

    use HasFactory;
}

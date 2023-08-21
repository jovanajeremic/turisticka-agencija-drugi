<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    public const TABLE = 'tipovi_putovanja';

    protected $table = self::TABLE;

    protected $fillable = [
        'tip'
    ];

    public function ponude() {
        return $this->hasMany(Ponuda::class);
    }

    use HasFactory;
}

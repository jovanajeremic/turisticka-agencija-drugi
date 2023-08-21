<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponuda extends Model
{
    public const TABLE = 'ponuda';

    protected $table = self::TABLE;

    protected $fillable = [
        'naziv',
        'opis',
        'cena',
        'popust',
        'tip_id',
        'zemlja_id',
        'duzina_putovanja'
    ];

    public function tip() {
        return $this->belongsTo(Tip::class);
    }

    public function zemlja() {
        return $this->belongsTo(Drzava::class);
    }

    use HasFactory;
}

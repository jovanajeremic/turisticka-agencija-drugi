<?php

namespace App\Http\Resources;

use App\Models\Drzava;
use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PonudaResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'naziv' => $this->naziv,
            'opis' => $this->opis,
            'cena' => $this->cena,
            'popust' => $this->popust,
            'duzina_putovanja' => $this->duzina_putovanja,
            'tip' => new TipResurs(Tip::find($this->tip_id)),
            'drzava' => new DrzavaResurs(Drzava::find($this->zemlja_id)),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

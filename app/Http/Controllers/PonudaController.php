<?php

namespace App\Http\Controllers;

use App\Http\Resources\PonudaResurs;
use App\Models\Ponuda;
use Illuminate\Http\Request;

class PonudaController extends Controller
{
    public function index() {
        return PonudaResurs::collection(Ponuda::all());
    }

    public function find($id) {
        return new PonudaResurs(Ponuda::findOrFail($id));
    }

    public function create(Request $request) {
        $ponuda = Ponuda::create($request->all());
        return new PonudaResurs($ponuda);
    }

    public function update(Request $request, $id) {
        $ponuda = Ponuda::findOrFail($id);
        $ponuda->update($request->all());
        return new PonudaResurs($ponuda);
    }

    public function delete($id) {
        $ponuda = Ponuda::findOrFail($id);
        $ponuda->delete();
        return new PonudaResurs($ponuda);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipResurs;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index() {
        return TipResurs::collection(Tip::all());
    }

    public function find($id) {
        return new TipResurs(Tip::findOrFail($id));
    }

    public function create(Request $request) {
        $tip = Tip::create($request->all());
        return new TipResurs($tip);
    }

    public function update(Request $request, $id) {
        $tip = Tip::findOrFail($id);
        $tip->update($request->all());
        return new TipResurs($tip);
    }

    public function delete($id) {
        $tip = Tip::findOrFail($id);
        $tip->delete();
        return new TipResurs($tip);
    }

}

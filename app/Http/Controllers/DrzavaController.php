<?php

namespace App\Http\Controllers;

use App\Http\Resources\DrzavaResurs;
use App\Models\Drzava;
use Illuminate\Http\Request;

class DrzavaController extends Controller
{
    public function index() {
        return DrzavaResurs::collection(Drzava::all());
    }

    public function find($id) {
        return new DrzavaResurs(Drzava::findOrFail($id));
    }

    public function create(Request $request) {
        $drzava = Drzava::create($request->all());
        return new DrzavaResurs($drzava);
    }

    public function update(Request $request, $id) {
        $drzava = Drzava::findOrFail($id);
        $drzava->update($request->all());
        return new DrzavaResurs($drzava);
    }

    public function delete($id) {
        $drzava = Drzava::findOrFail($id);
        $drzava->delete();
        return new DrzavaResurs($drzava);
    }

}

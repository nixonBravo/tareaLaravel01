<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{

    public function index()
    {
        $frutas = Fruta::where('estado', true)->get();
        return view ('fruit.index', compact('frutas'));
    }

    public function store(Request $request)
    {
        $fruta = new Fruta();
        $fruta->fruta = $request->fruta;
        $fruta->cantidad = $request->cantidad;
        $fruta->proveedor = $request->proveedor;
        $fruta->save();
        return redirect('/frutas');
    }

    public function edit($id){
        $fruta = Fruta::find($id);
        return view('fruit.edit', compact('fruta'));
    }

    public function update(Request $request, $id)
    {
        $fruta = Fruta::find($id);
        if($fruta){
            $fruta->fruta = $request->fruta;
            $fruta->cantidad = $request->cantidad;
            $fruta->proveedor = $request->proveedor;
            $fruta->save();
        }
        return redirect('/frutas');
    }

    public function destroy($id)
    {
        $fruta = Fruta::find($id);
        if($fruta){
            $fruta->estado=false;
            $fruta->save();
        }
        return back();
    }

}

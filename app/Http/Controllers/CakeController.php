<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Menu;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function create()
    {
        return view('create', ["menus" => Menu::all()]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tipe_cake' => 'required|string|max:100',
            'banyak_layer' => 'required|string|max:100',
            'ukuran_cake' => 'required|string|max:100',
            'jumlah_lilin' => 'required|string|max:100',
            'pesan_pada_cake' => 'required|string|max:100',
            'menu_id' => 'required'

        ]);

        Cake::create($validateData);

        return redirect('/')->with('success', 'Data berhasil ditambah');
    }

    public function show(Cake $id)
    {
        return view('show', [
            'title' => 'Cake',
            'cake' => $id
        ]);
    }

    public function edit(Cake $id)
    {
        return view('edit', [
            'title' => 'Cake',
            'cake' => $id,
            'menu' => Menu::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $cake = Cake::findOrFail($id);
        $validateData = $request->validate([
            'tipe_cake' => 'required|string|max:100',
            'banyak_layer' => 'required|string|max:100',
            'ukuran_cake' => 'required|string|max:100',
            'jumlah_lilin' => 'required|string|max:100',
            'pesan_pada_cake' => 'required|string|max:100',
            'menu_id' => 'required'
        ]);

        $cake->update($validateData);

        return redirect('/')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id)
    {
        $cake = Cake::findOrFail($id);
        $cake->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus');
    }
}

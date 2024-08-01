<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use Illuminate\Http\Request;

class QuartoController extends Controller
{
    public function index()
    {
        $quartos = Quarto::all();
        return view('quartos.index', compact('quartos'));
    }

    public function create()
    {
        return view('quartos.create');
    }

    public function store(Request $request)
    {
        Quarto::create($request->all());
        return redirect()->route('quartos.index');
    }

    public function show($id)
    {
        $quarto = Quarto::find($id);
        return view('quartos.show', compact('quarto'));
    }

    public function edit($id)
    {
        $quarto = Quarto::find($id);
        return view('quartos.edit', compact('quarto'));
    }

    public function update(Request $request, $id)
    {
        $quarto = Quarto::find($id);
        $quarto->update($request->all());
        return redirect()->route('quartos.index');
    }

    public function destroy($id)
    {
        Quarto::destroy($id);
        return redirect()->route('quartos.index');
    }
}

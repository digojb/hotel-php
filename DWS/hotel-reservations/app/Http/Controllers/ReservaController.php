<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Quarto;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('quarto')->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create(Request $request)
    {
        $quartos = Quarto::all();
        $quartoSelecionado = $request->input('quarto_id');
        return view('reservas.create', compact('quartos', 'quartoSelecionado'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'quarto_id' => 'required|exists:quartos,id',
            'data_reserva' => 'required|date',
        ]);

        Reserva::create($validatedData);
        return redirect()->route('reservas.index');
    }

    public function show($id)
    {
        $reserva = Reserva::with('quarto')->findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $quartos = Quarto::all();
        return view('reservas.edit', compact('reserva', 'quartos'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'quarto_id' => 'required|exists:quartos,id',
            'data_reserva' => 'required|date',
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($validatedData);
        return redirect()->route('reservas.index');
    }

    public function destroy($id)
    {
        Reserva::destroy($id);
        return redirect()->route('reservas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('quarto')->get();
        return view('home', compact('reservas'));
    }
}
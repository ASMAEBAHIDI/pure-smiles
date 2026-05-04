<?php

namespace App\Http\Controllers;

use App\Models\Specialist;

class CalculatorController extends Controller
{
    public function index()
    {
        $specialists = Specialist::where('is_active', true)->get();
        return view('calculator', compact('specialists'));
    }
}
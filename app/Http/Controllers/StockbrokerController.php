<?php

namespace App\Http\Controllers;

use App\Models\Stockbroker;
use Illuminate\Http\Request;

class StockbrokerController extends Controller
{
    public function index()
    {
        return inertia('Stockbrokers/Index', [
            'stockbrokers' => Stockbroker::get(),
        ]);
    }

    public function create()
    {
        return inertia('Stockbrokers/Create');
    }

    public function store(Request $request)
    {
        Stockbroker::firstOrCreate([
            'name' => $request->name,
            'full_name' => $request->full_name,
            'cnpj' => $request->cnpj,
        ]);

        return redirect()->route('stockbrokers.index');
    }
}

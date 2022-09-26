<?php

namespace App\Http\Controllers;

use App\Http\Resources\StockbrokerResource;
use App\Models\Stockbroker;
use Illuminate\Http\Request;

class StockbrokerController extends Controller
{
    public function index()
    {
        $stockbrokers = StockbrokerResource::collection(Stockbroker::all());

        return inertia('Stockbrokers/Index', compact('stockbrokers'));
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

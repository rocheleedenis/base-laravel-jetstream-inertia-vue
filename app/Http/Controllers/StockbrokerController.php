<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockbrokerRequest;
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

    public function store(StockbrokerRequest $request)
    {
        Stockbroker::firstOrCreate($request->validated());

        return redirect()->route('stockbrokers.index')
            ->with('message', 'Stockbroker created successfully!');
    }
}

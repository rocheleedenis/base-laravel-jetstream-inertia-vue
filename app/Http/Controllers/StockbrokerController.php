<?php

namespace App\Http\Controllers;

use App\Models\Stockbroker;

class StockbrokerController extends Controller
{
    public function index()
    {
        return inertia('Stockbrokers', [
            'stockbrokers' => Stockbroker::get(),
        ]);
    }
}

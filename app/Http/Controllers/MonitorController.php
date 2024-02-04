<?php

namespace App\Http\Controllers;

use App\Http\Requests\Monitor\StoreRequest;
use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function store(StoreRequest $request)
    {
        Monitor::create([
            ...$request->validated(),
            'user_id' => auth()->id(),
        ]);

        return response()->json(['message' => 'Monitor created successfully']);
    }
}

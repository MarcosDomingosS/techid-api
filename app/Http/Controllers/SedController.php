<?php

namespace App\Http\Controllers;

use App\Services\SedService;
use Illuminate\Http\Request;
use App\Models\Sed;

class SedController extends Controller
{

    public function __construct(private SedService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = $this->service;
        return response()->json([
            $service->list(),
            200
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = $this->service;

        $data = $request->validate([
            'name' => 'required',
            'code' => 'required',
        ],);

        $sed = $service->create($data);

        return response()->json($sed, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sed $sed)
    {
        return response()->json($sed);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sed $sed)
    {
        $data = $request->validate([
            'name' => 'sometimes|required',
            'code' => 'sometimes|required',
        ],);

        $service = $this->service;

        $sed = $service->update($sed, $data);

        return response()->json($sed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sed $sed)
    {
        $service = $this->service;

        $service->delete($sed);

        return response()->json(null, 204);
    }
}

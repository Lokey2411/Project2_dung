<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\resident;
use App\Http\Requests\StoreresidentRequest;
use App\Http\Requests\UpdateresidentRequest;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $obj = new resident();
        $residents = $obj -> index();
        return view('resident.index', [
            'residents'=>$residents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreresidentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resident $resident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateresidentRequest $request, resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resident $resident)
    {
        //
    }
}

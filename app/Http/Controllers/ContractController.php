<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Http\Requests\StorecontractRequest;
use App\Http\Requests\UpdatecontractRequest;
use App\Models\motel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $obj = new contract();
        $contracts = $obj -> index();
        return view('contract.index', [
            'contracts'=>$contracts
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
    public function store(StorecontractRequest $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contract $contract, Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontractRequest $request, contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contract $contract, Request $request)
    {
        //
    }
}

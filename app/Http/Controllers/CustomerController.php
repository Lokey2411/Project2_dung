<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\customer;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new customer();
        $customer = $obj->index();
        return view('customer.index', ['customers' => $customer] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecustomerRequest $request)
    {
        //
        $obj = new customer();
        $obj->email_cus = $request->email_cus;
        $obj->Fullname_cus = $request->Fullname_cus;
        $obj->DOB = $request->DOB;
        $obj->phone_number = $request->phone_number;
        $obj->store();
        return Redirect::route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer, Request $request)
    {
        //
        $obj = new customer();
        $obj->id = $request->id;
        $customer = $obj->edit();
        return view('customer.edit',['customers' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {
        //
        $obj = new customer();
        $obj->id = $request->id;
        $obj->email_cus = $request->email_cus;
        $obj->Fullname_cus = $request->Fullname_cus;
        $obj->DOB = $request->DOB;
        $obj->phone_number = $request->phone_number;
        $obj->updatecustomer();
        return Redirect::route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer, Request $request)
    {
        //
        $obj = new customer();
        $obj->id = $request->id;
        $obj->destroycustomer();
        return Redirect::route('customer.index');
    }
}

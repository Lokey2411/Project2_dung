<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\motel;
use App\Http\Requests\StoremotelRequest;
use App\Http\Requests\UpdatemotelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $obj = new motel();
        $motels = $obj -> index();
        return view('motel.index', [
            'motels'=>$motels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $objAdmin = new admin();
        $admin = $objAdmin->index();
        return view('motel.create', [
            'admins' => $admin
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremotelRequest $request)
    {
        //
        $obj = new motel();
        $obj->RoomNumber = $request->RoomNumber;
        $obj->RoomSite = $request->RoomSite;
        $obj->user_id = $request->user_id;
        $obj->store();
        return Redirect::route('motel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(motel $motel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(motel $motel, Request $request)
    {
        //
        $objAdmin = new admin();
        $admin = $objAdmin->index();
        $objMotel = new motel();
        $objMotel->id = $request->id;
        $motel = $objMotel->edit();
        return view('motel.edit', [
            'admins'=> $admin,
            'motels'=> $motel,
            'id'=> $objMotel->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemotelRequest $request, motel $motel)
    {
        //
        $obj = new motel();
        $obj->id = $request->id;
        $obj->RoomNumber = $request->RoomNumber;
        $obj->RoomSite = $request->RoomSite;
        $obj->user_id = $request->user_id;
        $obj->updateMotel();
        return Redirect::route('motel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(motel $motel, Request $request)
    {
        //
        $obj = new motel();
        $obj->id = $request->id;
        $obj->destroymotel();
        return Redirect::route('motel.index');
    }
}

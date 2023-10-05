<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $obj = new admin();
        $admin = $obj->index();
        return view('admin.index', ['admins' => $admin] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreadminRequest $request)
    {
        //
        $obj = new admin();
        $obj->Fullname_user = $request->Fullname_user;
        $obj->Username = $request->Username;
        $obj->Pass_user = $request->Pass_user;
        $obj->Title = $request->Title;
        $obj->store();
        return Redirect::route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin, Request $request)
    {
        //
        $obj = new admin();
        $obj->id = $request->id;
        $admin = $obj->edit();
        return view('admin.edit',['admins' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateadminRequest $request, admin $admin)
    {
        //
        $obj = new admin();
        $obj->id = $request->id;
        $obj->Fullname_user = $request->Fullname_user;
        $obj->Username = $request->Username;
        $obj->Pass_user = $request->Pass_user;
        $obj->Title = $request->Title;
        $obj->updateadmin();
        return Redirect::route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin, Request $request)
    {
        //
        $obj = new admin();
        $obj->id = $request->id;
        $obj->destroyadmin();
        return Redirect::route('admin.index');
    }
}

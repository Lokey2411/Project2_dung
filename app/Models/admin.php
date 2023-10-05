<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{
    use HasFactory;

    public function index(){
        $admin = DB::table('admins')->get();
        return $admin;
    }

    public function edit(){
        $admin = DB::table('admins')->where('id', $this->id)->get();
        return $admin;
    }

    public function store(){
        DB::table('admins')->insert([

            'Fullname_user' => $this->Fullname_user,
            'Username' => $this->Username,
            'Pass_user' => $this->Pass_user,
            'Title' => $this->Title
        ]);
    }

    public function updateadmin(){
        DB::table('admins')
            ->where('id',$this->id)
            ->update([
                'Fullname_user' => $this->Fullname_user,
                'Username' => $this->Username,
                'Pass_user' => $this->Pass_user,
                'Title' => $this->Title]);
    }

    public function destroyadmin(){
        DB::table('admins')
            ->where('id',$this->id)
            ->delete();
    }
}

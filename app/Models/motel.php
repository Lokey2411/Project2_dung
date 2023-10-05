<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class motel extends Model
{
    use HasFactory;

    public function index(){
        $motel = DB::table('motels')
            ->join('admins','admins.id','=','motels.user_id')
            ->select([
                'admins.*',
                'motels.*'
            ])
            ->get();
        return $motel;
    }

    public function store(){
        DB::table('motels')
            ->insert([
                'RoomNumber'=>$this->RoomNumber,
                'RoomSite'=>$this->RoomSite,
                'user_id'=>$this->user_id
            ]);
    }
}

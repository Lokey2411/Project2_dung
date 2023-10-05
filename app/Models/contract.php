<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class contract extends Model
{
    use HasFactory;

    public function index(){
        $contract = DB::table('contracts')
            ->join('motels','motels.id','=','contracts.motel_id')
            ->join('customers','customers.id','=','contracts.cus_id')
            ->select([
                'contracts.*',
                'motels.*',
                'customers.*'
            ])
            ->get();
        return $contract;
    }

    public function store(){
        DB::table('contracts')
            ->insert([
                'Contract_number'=>$this->Contract_number,
                'Start_time'=>$this->Start_time,
                'End_time'=>$this->End_time,
                'motel_id'=>$this->motel_id,
                'cus_id'=>$this->cus_id,
            ]);
    }
}

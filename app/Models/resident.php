<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class resident extends Model
{
    use HasFactory;

    public function index(){
        $resident = DB::table('residents')
            ->join('contracts','contracts.id','=','residents.contract_id')
            ->select([
                'contracts.*',
                'residents.*'
            ])
            ->get();
        return $resident;
    }

    public function store(){
        DB::table('residents')
            ->insert([
                'Name'=>$this->Name,
                'phone_number1'=>$this->phone_number1,
                'contract_id'=>$this->contract_id,
            ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaction extends Model
{
    use HasFactory;

    public function index(){
        $transaction = DB::table('transactions')
            ->join('contracts','contracts.id','=','transactions.contract_id')
            ->join('customers','customers.id','=','transactions.cus_id')
            ->select([
                'contracts.*',
                'customers.*',
                'transactions.*'
            ])
            ->get();
        return $transaction;
    }

    public function store(){
        DB::table('transactions')
            ->insert([
                'tran_number'=>$this->tran_number,
                'total_amount'=>$this->total_amount,
                'date_time'=>$this->date_time,
                'cus_id'=>$this->cus_id,
                'contract_id'=>$this->contract_id,
            ]);
    }
}

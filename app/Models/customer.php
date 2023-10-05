<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class customer extends Model
{
    use HasFactory;

    public function index(){
        $customer = DB::table('customers')->get();
        return $customer;
    }

    public function edit(){
        $customer = DB::table('customers')->where('id', $this->id)->get();
        return $customer;
    }

    public function store(){
        DB::table('customers')->insert([
            'email_cus' => $this->email_cus,
            'Fullname_cus' => $this->Fullname_cus,
            'DOB' => $this->DOB,
            'phone_number' => $this->phone_number
        ]);
    }

    public function updatecustomer(){
        DB::table('customers')
            ->where('id',$this->id)
            ->update([
                'email_cus' => $this->email_cus,
                'Fullname_cus' => $this->Fullname_cus,
                'DOB' => $this->DOB,
                'phone_number' => $this->phone_number
            ]);
    }

    public function destroycustomer(){
        DB::table('customers')
            ->where('id',$this->id)
            ->delete();
    }
}

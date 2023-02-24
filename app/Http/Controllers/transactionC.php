<?php

namespace App\Http\Controllers;

use App\Models\transactionM;
use Illuminate\Http\Request;
use App\Http\Resources\transactionR;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class transactionC extends Controller
{
    public function index(){
        $transaction = transactionM::all();
        // return response()-> json($transaction);
        return transactionR::collection($transaction);
    }

    public function detail($id){
        $transaction = transactionM::findOrFail($id);
    return new transactionR($transaction);
    }
}

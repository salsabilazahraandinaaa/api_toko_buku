<?php

namespace App\Http\Controllers;

use App\Models\productsM;
use Illuminate\Http\Request;
use App\Http\Resources\productsR;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class productsC extends Controller
{
    public function index(){
        $products = productsM::all();
        // return response()-> json($products);
        return productsR::collection($products);
    }

    public function detail($id){
        $products = productsM::findOrFail($id);
    return new productsR($products);
    }
}

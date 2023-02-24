<?php

namespace App\Http\Controllers;

use App\Models\logM;
use Illuminate\Http\Request;
use App\Http\Resources\logR;

class logC extends Controller
{
    public function index(){
        $log = logM::all();
        // return response()-> json($log);
        return logR::collection($log);
    }

    public function detail($id){
        $log = logM::findOrFail($id);
    return new logR($log);
    }
}

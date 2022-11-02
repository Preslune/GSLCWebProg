<?php

namespace App\Http\Controllers;

use App\Models\Drop;
use Illuminate\Http\Request;

class DropController extends Controller
{
    public function index(){
        
        $drop = Drop::all();

        return view('drop' , compact('drop'));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Cd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CdController extends Controller
{
    
    public function index() 
    {
        $cds = Cd::all();

        return response()->json($cds);
    }

}

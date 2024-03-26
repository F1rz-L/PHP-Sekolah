<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index(){
        $data = Pelajaran::all();

        return response()->json([
            'data' => $data
        ], 200);
    }
}

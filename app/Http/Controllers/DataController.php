<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function get_data(){
        $user = User::all()->take(10);
        return response()->json([
            'data' => $user,
            'status' => 200,
        ]);
    }
}

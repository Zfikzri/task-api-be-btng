<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        return response()->json([
            ['id' => '1', 'title' => 'Belajar 1', 'is_done' => false],
            ['id' => '2', 'title' => 'Belajar 2', 'is_done' => false],
            ['id' => '3', 'title' => 'Belajar 3', 'is_done' => false],
        ]);
    }

    public function store(Request $request){
        return response()->json([
            'message'=> 'Task Berhasil Dibuat'
        ],201);
    }
}

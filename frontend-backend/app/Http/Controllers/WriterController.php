<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WriterModel;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writer = WriterModel::all();
        return response()->json($writer);
    }

    public function store(Request $request)
    {
        $writer = new WriterModel();
        $writer -> name = $request -> name;
        $writer -> birth = $request -> birth;
        $writer -> save();
    }
}

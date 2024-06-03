<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id, $nama){
        return $id;
        return view('category', compact('id', 'nama'));
    }
}

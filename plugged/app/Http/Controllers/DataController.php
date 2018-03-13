<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Storage;

class DataController extends Controller {
    public function show_products(){
        $Products = DB::table('products')->get();
        return view('pages.products',compact('Products'));
    }
}
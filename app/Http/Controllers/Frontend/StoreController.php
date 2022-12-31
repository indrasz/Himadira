<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index(){
        $store = Store::orderBy('created_at', 'desc')->get();
        return view('pages.frontend.store.index', compact('store'));
    }
}

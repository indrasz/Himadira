<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class SmartController extends Controller
{
    public function index(){
        $smart = Info::where('category', 'SMART')->get();
        return view('pages.frontend.smart.index', compact('smart'));
    }

    public function show(Request $request, $slug)
    {
        $info = Info::where('slug', $slug)->firstOrFail();
        $listSmart = Info::where('category', 'SMART')->take(6)->get();
        return view('pages.frontend.smart.show', compact('info', 'listSmart'));
    }
}

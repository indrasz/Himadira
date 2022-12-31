<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index(){
        $info = Info::where('category', 'INFO')->get();
        return view('pages.frontend.info.index', compact('info'));
    }

    public function show(Request $request, $slug)
    {
        $info = Info::where('slug', $slug)->firstOrFail();
        $listInfo = Info::where('category', 'INFO')->take(6)->get();
        return view('pages.frontend.info.show', compact('info', 'listInfo'));
    }
}

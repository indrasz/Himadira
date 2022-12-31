<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $info = Info::where('category', 'INFO')->get();
        $intern = Info::where('category', 'INTERN')->get();
        $smart1 = Info::where('category', 'SMART')->first();
        $smart2 = Info::where('category', 'SMART')->skip(1)->take(1)->first();
        $smart3 = Info::where('category', 'SMART')->skip(2)->take(1)->first();
        $smart4 = Info::where('category', 'SMART')->skip(3)->take(1)->first();
        // dd($smart);
        return view('pages.frontend.index', compact('info', 'intern', 'smart1', 'smart2', 'smart3', 'smart4'));
    }
}

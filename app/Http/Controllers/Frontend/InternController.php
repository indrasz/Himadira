<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function index(){
        $intern = Info::where('category', 'INTERN')->get();
        return view('pages.frontend.intern.index', compact('intern'));
    }

    public function show(Request $request, $slug)
    {
        $info = Info::where('slug', $slug)->firstOrFail();
        $listIntern = Info::where('category', 'INTERN')->take(6)->get();
        return view('pages.frontend.intern.show', compact('info', 'listIntern'));
    }

}

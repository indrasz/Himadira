<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Creation;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    public function index()
    {
        $creation = Creation::orderBy('created_at', 'desc')->get();
        return view('pages.frontend.creation.index', compact('creation'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Store;
use App\Models\Info;
use App\Models\Creation;
use App\Models\Documentation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    // Department
    $countDep = Department::count();

    // Store
    $countStore = Store::count();

    // Documentation
    $countDoc = Documentation::count();

    // Creation
    $countCrea = Creation::count();

    // Information
    $countInfo = Info::count();

    return view("pages.admin.index")
      ->with("countDep", $countDep)
      ->with("countStore", $countStore)
      ->with("countDoc", $countDoc)
      ->with("countCrea", $countCrea)
      ->with("countInfo", $countInfo);
  }
}

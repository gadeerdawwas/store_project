<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Famous;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $companies=Company::count();
        $famoues=Famous::count();

        // return $companies;
        return view('dashboard.index',compact('companies',$companies ,'famoues',$famoues));
    }
}

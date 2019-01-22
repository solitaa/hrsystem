<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeType;
use App\Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employeeTypes = Company::find(1)->employeeTypes;
        $employeeTypesDefault = EmployeeType::whereNull('company_id')->get();

        
        $user = auth()->user();
        return view('home')->with( [
            'user'=> $user,
            'employeeTypes' => $employeeTypes,
            'employeeTypesDefault' => $employeeTypesDefault,
        ]);
    }
}

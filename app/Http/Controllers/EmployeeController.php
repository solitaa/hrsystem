<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Validator;

use App\Company;
use App\EmployeeType;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('employee.index')->with('users',  $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeeTypes = Company::find(1)->employeeTypes;
        $employeeTypesDefault = EmployeeType::whereNull('company_id')->get();

        return view('employee.create')->with( [
            'defaultImage' => 'uploads/avatars/profileImage.png',
            'employeeTypes' => $employeeTypes,
            'employeeTypesDefault' => $employeeTypesDefault,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'username' => 'max:255|alpha_dash|nullable|unique',
            'work_email' => 'email|nullable|unique',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();

        $user->work_email = $request->work_email;
        $user->office_phone_number = $request->office_phone_number;
        $user->employee_type_id = $request->employee_type_id;
        $user->start_date = $request->start_date;
        //manager??
        //hr manager ??
        //Employment Status  ??
        //Account Role  ??
        //Location ??
        //hr manager ??
        //Job Status ??



        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;



        $user->address = $request->address;
        $user->address_2 = $request->address_2;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postal_code = $request->postal_code;
        $user->country = $request->country;
        //should countries and states and cities be selects in tables


        if($request->hasFile('profile_image')){
            $image = $request->profile_image;
            $image_new_name = time().$image->getClientOriginalName();

            $image->move('uploads/avatars', $image_new_name);
            $user->profile_image = 'uploads/avatars/'.$image_new_name;

        }

        $user->save();



        Session::flash('success','Your invitation sent.(?)');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

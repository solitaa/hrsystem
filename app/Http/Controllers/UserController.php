<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Validator;

use App\Company;
use App\EmployeeType;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeTypes = Company::find(1)->employeeTypes;
        $employeeTypesDefault = EmployeeType::whereNull('company_id')->get();


        $user = auth()->user();
        return view('profile')->with( [
            'user'=> $user,
            'employeeTypes' => $employeeTypes,
            'employeeTypesDefault' => $employeeTypesDefault,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


        //return redirect('/posts')->with('success', "post Updated");
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



    public function updateProfile(Request $request)
    {

        $user = Auth::user();




        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'username' => 'max:255|alpha_dash|nullable|unique:users,username,'.$user->id,
            'work_email' => 'email|nullable|unique:users,work_email,'.$user->id,



        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }




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
        $user->username = $request->username;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;

        if($request->send_emails_to == 'work_email'){
            $user->send_emails_to = $request->work_email;
        }
        elseif($request->send_emails_to == 'email'){
            $user->send_emails_to = $request->email;
        }
        else {
            $user->send_emails_to = Null;
        }
        //password ????







        $user->address = $request->address;
        $user->address_2 = $request->address_2;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postal_code = $request->postal_code;
        $user->country = $request->country;
        //should countries and states and cities be selects in tables










        $user->save();



        Session::flash('success','Your profile was updated.');
        return redirect()->back();

    }




}

@extends('layouts.app') 
@section('content')
<div class="container">
    <div class=""> 
        <div>
            <h2 class="displayInlineBlock">Manage Team</h2>
            <a href="{{ route('employee.create') }}" class="btn btn-success displayInlineBlock"> Add Employee</a>
        </div>
        <p class="">Add new employees, update specific employee information, time off, files, and more. This is the main hub to manage your team.</p>
        <span class="fr upgrade-text-intro js-upgrade-text"></span> 
    </div>

</div>
<div class="container">
        {{-- <div class="large-12 column"> 
            <a href="manage-team/add" class="btn success fr nav-btn js-upgrade-dim"><i class="fa fa-plus"></i> Add Employee</a>
            <a href="manage-team/invite" class="btn transparent fr nav-btn js-upgrade-hide">Import Employees</a>
            <h2 class="page-title loner">Manage Team</h2>
            <p class="upgrade-text-intro">Add new employees, update specific employee information, time off, files, and more. This is the main hub to manage your team.</p>
            <span class="fr upgrade-text-intro js-upgrade-text"></span> 
        </div> --}}
        @foreach($users as $user)
            <div class="card inlineCard" style="width: 12rem;">
                <img class="card-img-top" src="{{ asset($user->profile_image)}}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('user.profile', ['id' => $user->id]) }}" class="btn btn-link"><h5 class="card-title">{{$user->name}} {{ $user->last_name}}</h5></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
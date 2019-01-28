@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('employee.store')}}" enctype="multipart/form-data">
        <div class="row">
            @csrf
            @include('employee.add.ownerEmploymentDetails')
            @include('employee.add.profile')
            @include('employee.add.personalInfo')
        </div>
    </form>
</div>
@endsection
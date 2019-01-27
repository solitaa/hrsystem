@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('user.update')}}">
        <div class="row">
            @csrf
            @include('user.ownerEmploymentDetails')
            @include('user.profile')
            @include('user.personalInfo')
        </div>
    </form>
</div>
@endsection
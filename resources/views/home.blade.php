@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <form method="POST" action="/user/update">
        <div class="row">
            @method('PUT')
            @csrf
            @include('user.ownerEmploymentDetails')
            @include('user.profile')
            @include('user.personalInfo')
        </div>
    </form>
</div>
@endsection
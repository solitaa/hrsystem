@extends('layouts.app') 
@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('user.update')}}" enctype='multipart/form-data'>
        <div class="row">
            @csrf
            @include('user.ownerEmploymentDetails')
            @include('user.profile')
            @include('user.personalInfo')
        </div>
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change your password.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('user.changePassword')}}"> 
                            @csrf 
                            <div class="form-group">
                                <label for="currentpassword">Current Password</label>
                                <input type="password" class="form-control" id="currentpassword" name="currentpassword" >
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" id="password" name="password" >
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#exampleModal').on('shown.bs.modal', function () {
                $('#exampleModal').trigger('focus')
            });
        </script>
</div>
@endsection
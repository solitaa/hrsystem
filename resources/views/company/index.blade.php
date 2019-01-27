@extends('layouts.app')

@section('content')
    <div class="card w-75">
        <div class="card-header">
            Company details
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('company.details.update')}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">{{ __('Company name') }}</label>
                        <input type="text" class="form-control" id="name"  name="name" value="{{ $company->name }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="phone_number">{{ __('Company phone number') }}</label>
                        <input type="text" class="form-control" id="phone_number"  name="phone_number" value="{{ $company->phone_number }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="size">{{ __('Select company size') }}</label>
                        <select name="size" id="size"  class="form-control">
                            <option value="0" selected="selected" disabled="disabled">Select Company Size</option>
                            <option {{ $company->size == "1-10" ? ' selected' : '' }} value="1-10">1-10 Employees</option>
                            <option {{ $company->size == "11-25" ? ' selected' : '' }} value="11-25">11-25 Employees</option>
                            <option {{ $company->size == "26-50" ? ' selected' : '' }} value="26-50">26-50 Employees</option>
                            <option {{ $company->size == "51-100" ? ' selected' : '' }} value="51-100">51-100 Employees</option>
                            <option {{ $company->size == "100-200" ? ' selected' : '' }} value="100-200">100-200 Employees</option>
                            <option {{ $company->size == "200-500" ? ' selected' : '' }} value="200-500">200-500 Employees</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
@endsection


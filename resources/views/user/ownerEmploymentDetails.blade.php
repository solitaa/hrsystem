<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="">{{$user->name}} {{$user->last_name}}</h3>
            {{ __('Employment Details') }}
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="start_date">{{ __('Start Date') }}</label>
                    <input type="date" class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" id="start_date"  name="start_date" value="{{ $user->start_date }}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="employee_type">{{ __('Employee Type') }}</label>
                    <select id="employee_type" name="employee_type" class="form-control">
                        <option value="">Select</option>
                        @foreach($employeeTypesDefault as $employeeType)
                            <option {{ $employeeType->id == $user->employee_type_id ? 'selected' : '' }} value="{{$employeeType->id}}">{{$employeeType->employee_type_name}}</option>
                        @endforeach
                        @foreach($employeeTypes as $employeeType)
                            <option {{ $employeeType->id == $user->employee_type_id ? 'selected' : '' }} value="{{$employeeType->id}}">{{$employeeType->employee_type_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="work_email">{{ __('Work Email') }}</label>
                    <input type="text" class=" form-control" id="work_email"  name="work_email" value="{{ $user->work_email }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="office_phone_number">{{ __('Office Phone Number') }}</label>
                    <input type="text" class=" form-control" id="office_phone_number"  name="office_phone_number" value="{{ $user->office_phone_number }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="manager">{{ __('Manager') }}</label>
                    <select id="manager" name="manager" class="form-control">
                        <option value="">Select</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="hrManager">{{ __('HR Manager') }}</label>
                    <select id="hrManager" name="hrManager" class="form-control">
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">{{ __('Employment Status') }}</label>
                    <input type="text" class=" form-control{{ $errors->has('') ? ' is-invalid' : '' }}" id=""  name="" value="">
                </div>
                <div class="form-group col-md-6">
                    <label for="">{{ __('Account Role') }}</label>
                    <input type="text" class=" form-control{{ $errors->has('') ? ' is-invalid' : '' }}" id=""  name="" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">{{ __('Location') }}</label>
                    <input type="text" class=" form-control{{ $errors->has('') ? ' is-invalid' : '' }}" id=""  name="" value="">
                </div>
                <div class="form-group col-md-6">
                    <label for="">{{ __('Job Status') }}</label>
                    <input type="text" class=" form-control{{ $errors->has('') ? ' is-invalid' : '' }}" id=""  name="" value="">
                </div>
            </div>
        </div>
    </div>
</div>

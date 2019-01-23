<div class="col-md-6">
    <div class="card">
        <div class="card-header">
                <h3 class="">{{ __('Personal Info') }}</h3>
            </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="address">{{ __('Address') }}</label>
                    <input type="text" class="form-control" id="address"  name="address" value="{{ $user->address }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="address_2">{{ __('Address (opt)') }}</label>
                    <input type="text" class="form-control" id="address_2"  name="address_2" value="{{ $user->address_2 }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_of_birth">{{ __('Date of Birth') }}</label>
                    <input type="date" class="form-control"  id="date_of_birth"  name="date_of_birth" value="{{ $user->date_of_birth }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">{{ __('Gender') }}</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="city">{{ __('City') }}</label>
                    <input type="text" class="form-control" id="city"  name="city" value="{{ $user->city }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="state">{{ __('State/Province') }}</label>
                    <input type="text" class="form-control" id="state"  name="state" value="{{ $user->state }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="postal_code">{{ __('Postal Code') }}</label>
                    <input type="text" class="form-control" id="postal_code"  name="postal_code" value="{{ $user->postal_code }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="country">{{ __('Country') }}</label>
                    <input type="text" class="form-control" id="country"  name="country" value="{{ $user->country }}">
                </div>
            </div>
            @include('user.formButton')
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="">{{ __('Profile') }}</h3>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="name"  name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">{{ __('Last Name') }}</label>
                    <input type="text" class="form-control" id="last_name"  name="last_name" value="{{ $user->last_name }}" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">{{ __('Username') }}</label>
                    <input type="text" class="form-control" id="username"  name="username" value="{{ $user->username }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" class="form-control" id="password"  name="password" value="00000000"  disabled="disabled">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">{{ __('Personal Email') }}</label>
                    <input type="email" class="form-control" id="email"  name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="send_emails_to">{{ __('Send Emails to') }}</label>
                    <select id="send_emails_to" name="send_emails_to" class="form-control">
                            <option value="">Select</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone_number">{{ __('Personal Phone Number') }}</label>
                    <input type="phone_number" class="form-control" id="phone_number"  name="phone_number" value="{{ $user->phone_number }}">
                </div>
            </div>
        </div>
    </div>
</div>
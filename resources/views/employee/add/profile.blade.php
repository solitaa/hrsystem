<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="">{{ __('Profile') }}</h3>
        </div>
        <div class="card-body">
            <div class="form-row">
                    <div class="card inlineCard" style="width: 7rem;">
                        <img class="card-img-top" src="{{ asset($defaultImage)}}" alt="Card image cap">
                    </div>
                    <div class="inlineCard">
                        <label for="profile_image">Upload a new profile image.</label>
                        <input type="file" class="form-control-file" name="profile_image" id="profile_image">
                    </div>
                </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">{{ __('Name *') }}</label>
                    <input type="text" class="form-control" id="name"  name="name" >
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">{{ __('Last Name *') }}</label>
                    <input type="text" class="form-control" id="last_name"  name="last_name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="email">{{ __('Invitation Email *') }}</label>
                    <input type="email" class="form-control" id="email"  name="email">
                </div>
            </div>
        </div>
    </div>
</div>

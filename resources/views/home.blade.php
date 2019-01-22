@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Employment Details') }}
                    <h3 class="js-page-title page-title title-center">{{$user->name}} {{$user->last_name}}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}"
                                    required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name"
                                    value="{{ $user->last_name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
                            <div class="col-md-6">
                                <input id="start_date" type="date" class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date"
                                    value="{{ $user->start_date  }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="employee_type" class="col-md-4 col-form-label text-md-right">{{ __('Employee Type') }}</label>
                            <div class="col-md-6">
                                <select class="form-control">
                                        <option value="" >Select</option>
                                        @foreach($employeeTypesDefault as $employeeType)
                                            <option {{ $employeeType->id == $user->employee_type_id ? 'selected' : '' }} value="{{$employeeType->id}}">{{$employeeType->employee_type_name}}</option>
                                        @endforeach
                                        @foreach($employeeTypes as $employeeType)
                                            <option {{ $employeeType->id == $user->employee_type_id ? 'selected' : '' }} value="{{$employeeType->id}}">{{$employeeType->employee_type_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="sub-page" class="hr-as-ee" style="display: block;">
    <section class="row parent content-intro borderless">
        <div class="large-12 column">
            <div class="row">
                <div class="large-12 column">
                    <h1 class="section-title"> <a href="manage-team" class="manage-team-breadcrumb">Manage Team</a> </h1>
                </div>
            </div>
            <div class="row employee-manage">
                <div class="large-11 columns">
                    <h2 class="js-page-title page-title title-center">Arevik Arevyan</h2> <span class="js-status-pill pill"></span> <a href="javascript:void(0)" class=""></a>                    </div>
            </div>
            <div class="row">
                <div class="large-12 column">
                    <p> Add or edit your information here, and your HR Manager will be notified of the updates. Likewise if your
                        HR Manager makes any changes, you’ll be notified.</p>
                </div>
            </div>
        </div>
    </section>
    <form id="decoyForm" class="visuallyhidden"> <input type="password" name="password"> <input type="text" name="username"> </form>
    <form id="employee-info-form" autocomplete="off" novalidate="novalidate">
        <div class="row parent content-block">
            <div class="large-6 columns">
                <div class="row">
                    <div class="large-12 column">
                        <h2 class="profile-header">Employment Details</h2>
                    </div>
                </div>
                <div class="form-block">
                    <div class="row">
                        <div class="large-6 end columns"> <label for="startDate">Start Date <span class="required-field">*</span></label> <input readonly="true"
                                type="text" class="large-12 js-datepicker datepicker hasDatepicker" id="dp1548146101345">
                            <input data-value="employee.startDate | date" id="startDate" name="startDate" class="large-12 js-altField" type="hidden"
                                value="2019-01-22T08:36:43.063"> </div>
                        <div class="large-6 columns"> <label for="employeeType">Employee Type</label>
                            <div class="selector" id="uniform-employeeType"><span>Select</span><select data-value="employee.relatedEmployeeTypeID" id="employeeType" name="employeeType"
                                    style="opacity: 0;"><option value="" selected="">Select</option><option value="6">Contractor</option><option value="4">Full-time</option><option value="7">Intern</option><option value="5">Part-time</option></select></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-6 column"> <input data-value="employee.tempAvatar" id="tempAvatar" class="temp-avatar" name="tempAvatar" type="hidden"
                                style="display:none" value=""> <label for="companyEmail">Work Email</label> <input data-value="employee.companyEmail"
                                maxlength="100" id="companyEmail" name="companyEmail" class="large-12" type="email"> </div>
                        <div class="large-6 column"> <label for="officeNumber">Office Phone Number</label> <input data-value="employee.officeNumber" id="officeNumber"
                                name="officeNumber" class="large-12 phoneFormatValidate" type="tel"> </div>
                    </div>
                    <div class="row">
                        <div class="large-6 columns tooltip-parent"> <label for="managerOptions">Manager</label> <span class="js-tooltip-trigger inline-tooltip-trigger"
                                data-tooltip="Your manager is responsible for approving your time-off requests. If no one is selected here, then your requests are routed to your HR Manager."> <i class="fa fa-info-circle"></i> </span>
                            <div class="selector" id="uniform-managerOptions"><span>Select</span><select data-value="employee.relatedManagerID" name="managerOptions" id="managerOptions"
                                    style="opacity: 0;"><option value="" selected="">Select</option></select></div>
                        </div>
                        <div class="large-6 columns"> <label for="hRManagerOptions">HR Manager</label>
                            <div class="selector" id="uniform-hRManagerOptions"><span>Select</span><select data-value="employee.relatedHRManagerID" name="hRManagerOptions" id="hRManagerOptions"
                                    style="opacity: 0;"><option value="" selected="">Select</option></select></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-6 columns"> <label for="employmentStatusOptions" class="tooltip-parent"> Employment Status <span class="tooltip-trigger js-tooltip-trigger-status" data-tooltip="Note: By setting this employee's employment status to anything other than active, they will automatically be unable to sign in. For terminated and resigned employees, you may also provide their last date of employment."> <i class="fa fa-info-circle"></i> </span> </label>                            <input value="Active" type="text" disabled="disabled"> </div>
                        <div class="large-6 columns">
                            <div class="employeeStatusEndDate" style="display: none;"> <label for="endDate">Last Date of Employment</label> <input readonly="true" type="text" class="large-12 js-datepicker-end datepicker hasDatepicker"
                                    id="dp1548146101346"> <input data-value="employee.endDate | date" id="endDate" name="endDate"
                                    class="large-12 js-altField-end" type="hidden" value=""> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-6 columns"> <label for="employeeStatus">Access Status</label>
                            <div class="uniform-select-wrapper"> <input value="Active" id="employeeStatus" type="text" disabled="disabled"> </div>
                        </div>
                        <div class="large-6 columns"> <label>Account Role</label> <input value="Account Owner" disabled="disabled" type="text"> </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns tooltip-parent"> <label for="relatedLocationID">Location</label> <span class="js-tooltip-trigger-location inline-tooltip-trigger"
                                data-tooltip="Locations are custom fields you can set for your organization on the Team page under Locations."> <i class="fa fa-info-circle"></i> </span>
                            <div class="selector" id="uniform-relatedLocationID"><span>Select</span><select data-value="employee.relatedLocationID" id="relatedLocationID" name="relatedLocationID"
                                    style="opacity: 0;"><option value="" selected="">Select</option></select></div>
                        </div>
                        <div class="large-12 columns"> <label>Job Title</label>
                            <ul class="js-jobdescriptions job-description-list row-list">
                                <li class="row">
                                    <div class="large-10 columns">
                                        <div class="selector" id="uniform-undefined"><span>Select</span><select style="opacity: 0;"><option value="" selected="">Select</option></select></div>
                                    </div>
                                    <div class="large-2 columns action-row"> <a class="js-delete-jobdescription row-btn remove" href="javascript:void(0);" style="display: none;"> <i class="fa fa-lg fa-times"></i> </a>                                        <a class="js-add-jobdescription row-btn add" href="javascript:void(0);"> <i class="fa fa-lg fa-plus"></i> </a>                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-6 columns">
                <div class="panel employee-remove">
                    <div class="form-block">
                        <div class="row">
                            <div class="large-12 column">
                                <h2>Kin Profile</h2>
                            </div>
                        </div>
                        <div class="panel-border"></div>
                        <div class="row profile-avatar">
                            <div class="large-3 columns">
                                <div class="profile-avatar-image med-avatar" id="uploadAvatar">
                                    <div class="initials-avatar">AA</div>
                                </div>
                            </div>
                            <div class="large-9 columns">
                                <div class="profile-avatar-text"> <a href="javascript:void(0)" class="profile-avatar-upload callout-link"><i class="fa fa-upload"></i> Upload</a>                                    a new image or <a class="profile-avatar-remove callout-link" href="javascript:void(0)">remove</a>                                    this one. </div> <input type="file" class="upload-avatar-input" style="display:none">                                </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns"> <label for="usernameString">Username <a class="js-change-username-link">(Change)</a></label>
                                <input data-value="employee.username" id="usernameString" type="text" maxlength="100" disabled="disabled" autocomplete="off">                                </div>
                            <div class="large-6 columns"> <label for="js-password-display">Password <a class="js-change-password-link">(Change)</a></label>                                <input id="js-password-display" type="text" value="0000000000" disabled="disabled" autocomplete="off">                                </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns"> <label for="firstName">First Name <span class="required-field">*</span></label> <input data-value="employee.firstName"
                                    id="firstName" name="firstName" class="large-12" type="text" maxlength="100" autocorrect="off">                                </div>
                            <div class="large-6 columns"> <label for="lastName">Last Name <span class="required-field">*</span></label> <input data-value="employee.lastName"
                                    id="lastName" name="lastName" class="large-12" type="text" maxlength="100" autocorrect="off">                                </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns"> <label for="personalEmail">Personal Email <span class="required-field">*</span></label>
                                <input data-value="employee.personalEmail" maxlength="75" id="personalEmail" name="personalEmail" class="large-12" type="email">                                </div>
                            <div class="large-6 columns js-dropdown-validation-wrapper"> <label for="employmentStatusOptions">Send Kin Emails to:</label>
                                <div class="selector" id="uniform-emailPreferenceOptions"><span>Personal</span><select data-value="employee.relatedEmailPreferenceID" name="emailPreferenceOptions"
                                        id="emailPreferenceOptions" style="opacity: 0;"><option value="1" selected="">Personal</option><option value="2">Work</option></select></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns"> <label for="personalNumber">Personal Phone Number</label> <input data-value="employee.personalNumber"
                                    id="personalNumber" name="personalNumber" class="large-12 phoneFormatValidate" type="tel">                                </div>
                            <div class="large-6 columns"> <label for="timeZoneID">Time Zone</label>
                                <div class="selector" id="uniform-timeZoneID"><span>(UTC-08:00) Baja California</span><select data-value="employee.timeZoneId" id="timeZoneID"
                                        name="timeZoneID" style="opacity: 0;"><option value="Dateline Standard Time">(UTC-12:00) International Date Line West</option><option value="UTC-11">(UTC-11:00) Coordinated Universal Time-11</option><option value="Aleutian Standard Time">(UTC-10:00) Aleutian Islands</option><option value="Hawaiian Standard Time">(UTC-10:00) Hawaii</option><option value="Marquesas Standard Time">(UTC-09:30) Marquesas Islands</option><option value="Alaskan Standard Time">(UTC-09:00) Alaska</option><option value="UTC-09">(UTC-09:00) Coordinated Universal Time-09</option><option value="Pacific Standard Time (Mexico)">(UTC-08:00) Baja California</option><option value="UTC-08">(UTC-08:00) Coordinated Universal Time-08</option><option value="Pacific Standard Time">(UTC-08:00) Pacific Time (US &amp; Canada)</option><option value="US Mountain Standard Time">(UTC-07:00) Arizona</option><option value="Mountain Standard Time (Mexico)">(UTC-07:00) Chihuahua, La Paz, Mazatlan</option><option value="Mountain Standard Time">(UTC-07:00) Mountain Time (US &amp; Canada)</option><option value="Central America Standard Time">(UTC-06:00) Central America</option><option value="Central Standard Time">(UTC-06:00) Central Time (US &amp; Canada)</option><option value="Easter Island Standard Time">(UTC-06:00) Easter Island</option><option value="Central Standard Time (Mexico)">(UTC-06:00) Guadalajara, Mexico City, Monterrey</option><option value="Canada Central Standard Time">(UTC-06:00) Saskatchewan</option><option value="SA Pacific Standard Time">(UTC-05:00) Bogota, Lima, Quito, Rio Branco</option><option value="Eastern Standard Time (Mexico)">(UTC-05:00) Chetumal</option><option value="Eastern Standard Time">(UTC-05:00) Eastern Time (US &amp; Canada)</option><option value="Haiti Standard Time">(UTC-05:00) Haiti</option><option value="Cuba Standard Time">(UTC-05:00) Havana</option><option value="US Eastern Standard Time">(UTC-05:00) Indiana (East)</option><option value="Turks And Caicos Standard Time">(UTC-05:00) Turks and Caicos</option><option value="Paraguay Standard Time">(UTC-04:00) Asuncion</option><option value="Atlantic Standard Time">(UTC-04:00) Atlantic Time (Canada)</option><option value="Venezuela Standard Time">(UTC-04:00) Caracas</option><option value="Central Brazilian Standard Time">(UTC-04:00) Cuiaba</option><option value="SA Western Standard Time">(UTC-04:00) Georgetown, La Paz, Manaus, San Juan</option><option value="Pacific SA Standard Time">(UTC-04:00) Santiago</option><option value="Newfoundland Standard Time">(UTC-03:30) Newfoundland</option><option value="Tocantins Standard Time">(UTC-03:00) Araguaina</option><option value="E. South America Standard Time">(UTC-03:00) Brasilia</option><option value="SA Eastern Standard Time">(UTC-03:00) Cayenne, Fortaleza</option><option value="Argentina Standard Time">(UTC-03:00) City of Buenos Aires</option><option value="Greenland Standard Time">(UTC-03:00) Greenland</option><option value="Montevideo Standard Time">(UTC-03:00) Montevideo</option><option value="Magallanes Standard Time">(UTC-03:00) Punta Arenas</option><option value="Saint Pierre Standard Time">(UTC-03:00) Saint Pierre and Miquelon</option><option value="Bahia Standard Time">(UTC-03:00) Salvador</option><option value="UTC-02">(UTC-02:00) Coordinated Universal Time-02</option><option value="Mid-Atlantic Standard Time">(UTC-02:00) Mid-Atlantic - Old</option><option value="Azores Standard Time">(UTC-01:00) Azores</option><option value="Cape Verde Standard Time">(UTC-01:00) Cabo Verde Is.</option><option value="UTC">(UTC) Coordinated Universal Time</option><option value="Morocco Standard Time">(UTC+00:00) Casablanca</option><option value="GMT Standard Time">(UTC+00:00) Dublin, Edinburgh, Lisbon, London</option><option value="Greenwich Standard Time">(UTC+00:00) Monrovia, Reykjavik</option><option value="W. Europe Standard Time">(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option><option value="Central Europe Standard Time">(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option><option value="Romance Standard Time">(UTC+01:00) Brussels, Copenhagen, Madrid, Paris</option><option value="Sao Tome Standard Time">(UTC+01:00) Sao Tome</option><option value="Central European Standard Time">(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option><option value="W. Central Africa Standard Time">(UTC+01:00) West Central Africa</option><option value="Jordan Standard Time">(UTC+02:00) Amman</option><option value="GTB Standard Time">(UTC+02:00) Athens, Bucharest</option><option value="Middle East Standard Time">(UTC+02:00) Beirut</option><option value="Egypt Standard Time">(UTC+02:00) Cairo</option><option value="E. Europe Standard Time">(UTC+02:00) Chisinau</option><option value="Syria Standard Time">(UTC+02:00) Damascus</option><option value="West Bank Standard Time">(UTC+02:00) Gaza, Hebron</option><option value="South Africa Standard Time">(UTC+02:00) Harare, Pretoria</option><option value="FLE Standard Time">(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option><option value="Israel Standard Time">(UTC+02:00) Jerusalem</option><option value="Kaliningrad Standard Time">(UTC+02:00) Kaliningrad</option><option value="Sudan Standard Time">(UTC+02:00) Khartoum</option><option value="Libya Standard Time">(UTC+02:00) Tripoli</option><option value="Namibia Standard Time">(UTC+02:00) Windhoek</option><option value="Arabic Standard Time">(UTC+03:00) Baghdad</option><option value="Turkey Standard Time">(UTC+03:00) Istanbul</option><option value="Arab Standard Time">(UTC+03:00) Kuwait, Riyadh</option><option value="Belarus Standard Time">(UTC+03:00) Minsk</option><option value="Russian Standard Time">(UTC+03:00) Moscow, St. Petersburg, Volgograd</option><option value="E. Africa Standard Time">(UTC+03:00) Nairobi</option><option value="Iran Standard Time">(UTC+03:30) Tehran</option><option value="Arabian Standard Time">(UTC+04:00) Abu Dhabi, Muscat</option><option value="Astrakhan Standard Time">(UTC+04:00) Astrakhan, Ulyanovsk</option><option value="Azerbaijan Standard Time">(UTC+04:00) Baku</option><option value="Russia Time Zone 3">(UTC+04:00) Izhevsk, Samara</option><option value="Mauritius Standard Time">(UTC+04:00) Port Louis</option><option value="Saratov Standard Time">(UTC+04:00) Saratov</option><option value="Georgian Standard Time">(UTC+04:00) Tbilisi</option><option value="Caucasus Standard Time">(UTC+04:00) Yerevan</option><option value="Afghanistan Standard Time">(UTC+04:30) Kabul</option><option value="West Asia Standard Time">(UTC+05:00) Ashgabat, Tashkent</option><option value="Ekaterinburg Standard Time">(UTC+05:00) Ekaterinburg</option><option value="Pakistan Standard Time">(UTC+05:00) Islamabad, Karachi</option><option value="India Standard Time">(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi</option><option value="Sri Lanka Standard Time">(UTC+05:30) Sri Jayawardenepura</option><option value="Nepal Standard Time">(UTC+05:45) Kathmandu</option><option value="Central Asia Standard Time">(UTC+06:00) Astana</option><option value="Bangladesh Standard Time">(UTC+06:00) Dhaka</option><option value="Omsk Standard Time">(UTC+06:00) Omsk</option><option value="Myanmar Standard Time">(UTC+06:30) Yangon (Rangoon)</option><option value="SE Asia Standard Time">(UTC+07:00) Bangkok, Hanoi, Jakarta</option><option value="Altai Standard Time">(UTC+07:00) Barnaul, Gorno-Altaysk</option><option value="W. Mongolia Standard Time">(UTC+07:00) Hovd</option><option value="North Asia Standard Time">(UTC+07:00) Krasnoyarsk</option><option value="N. Central Asia Standard Time">(UTC+07:00) Novosibirsk</option><option value="Tomsk Standard Time">(UTC+07:00) Tomsk</option><option value="China Standard Time">(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option><option value="North Asia East Standard Time">(UTC+08:00) Irkutsk</option><option value="Singapore Standard Time">(UTC+08:00) Kuala Lumpur, Singapore</option><option value="W. Australia Standard Time">(UTC+08:00) Perth</option><option value="Taipei Standard Time">(UTC+08:00) Taipei</option><option value="Ulaanbaatar Standard Time">(UTC+08:00) Ulaanbaatar</option><option value="Aus Central W. Standard Time">(UTC+08:45) Eucla</option><option value="Transbaikal Standard Time">(UTC+09:00) Chita</option><option value="Tokyo Standard Time">(UTC+09:00) Osaka, Sapporo, Tokyo</option><option value="North Korea Standard Time">(UTC+09:00) Pyongyang</option><option value="Korea Standard Time">(UTC+09:00) Seoul</option><option value="Yakutsk Standard Time">(UTC+09:00) Yakutsk</option><option value="Cen. Australia Standard Time">(UTC+09:30) Adelaide</option><option value="AUS Central Standard Time">(UTC+09:30) Darwin</option><option value="E. Australia Standard Time">(UTC+10:00) Brisbane</option><option value="AUS Eastern Standard Time">(UTC+10:00) Canberra, Melbourne, Sydney</option><option value="West Pacific Standard Time">(UTC+10:00) Guam, Port Moresby</option><option value="Tasmania Standard Time">(UTC+10:00) Hobart</option><option value="Vladivostok Standard Time">(UTC+10:00) Vladivostok</option><option value="Lord Howe Standard Time">(UTC+10:30) Lord Howe Island</option><option value="Bougainville Standard Time">(UTC+11:00) Bougainville Island</option><option value="Russia Time Zone 10">(UTC+11:00) Chokurdakh</option><option value="Magadan Standard Time">(UTC+11:00) Magadan</option><option value="Norfolk Standard Time">(UTC+11:00) Norfolk Island</option><option value="Sakhalin Standard Time">(UTC+11:00) Sakhalin</option><option value="Central Pacific Standard Time">(UTC+11:00) Solomon Is., New Caledonia</option><option value="Russia Time Zone 11">(UTC+12:00) Anadyr, Petropavlovsk-Kamchatsky</option><option value="New Zealand Standard Time">(UTC+12:00) Auckland, Wellington</option><option value="UTC+12">(UTC+12:00) Coordinated Universal Time+12</option><option value="Fiji Standard Time">(UTC+12:00) Fiji</option><option value="Kamchatka Standard Time">(UTC+12:00) Petropavlovsk-Kamchatsky - Old</option><option value="Chatham Islands Standard Time">(UTC+12:45) Chatham Islands</option><option value="UTC+13">(UTC+13:00) Coordinated Universal Time+13</option><option value="Tonga Standard Time">(UTC+13:00) Nuku'alofa</option><option value="Samoa Standard Time">(UTC+13:00) Samoa</option><option value="Line Islands Standard Time">(UTC+14:00) Kiritimati Island</option></select></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns"> <label>Do you want to receive weekly task reminder emails?</label>
                                <div class="large-4 column">
                                    <div class="uniform-crossed-radio-wrapper">
                                        <div class="radio" id="uniform-enableTaskRemindersYes"><span><input type="radio" name="enableTaskReminders" id="enableTaskRemindersYes" class="big-uniform-radio" value="true" style="opacity: 0;"></span></div>
                                        <label for="enableTaskRemindersYes"> <span class="inline-label">Yes</span> </label>                                        </div>
                                </div>
                                <div class="large-8 column">
                                    <div class="uniform-crossed-radio-wrapper">
                                        <div class="radio" id="uniform-enableTaskRemindersNo"><span class="checked"><input type="radio" name="enableTaskReminders" id="enableTaskRemindersNo" class="big-uniform-radio" value="false" checked="&quot;checked&quot;" style="opacity: 0;"></span></div>
                                        <label for="enableTaskRemindersNo"> <span class="inline-label">No</span> </label>                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-1 columns"> <br> </div>
        </div>
        <div class="js-expand-section collapse-header collapsed expanded">
            <h2>Personal Information</h2> <a href="javascript:void(0);" class="js-collapse-icon collapse-icon" style="display: none;"> <i class="fa fa-plus"></i> </a>            <a href="javascript:void(0);" class="js-collapse-icon collapse-icon" style=""> <i class="fa fa-minus"></i> </a>            </div>
        <div class="js-collapsed-content collapsed-content row parent content-block" style="display: block;">
            <div class="large-6 columns">
                <div class="form-block">
                    <div class="row">
                        <div class="large-12 columns"> <label for="address1">Address</label> <input data-value="employee.address1" maxlength="100" id="address1"
                                name="address1" class="large-12" type="text" autocorrect="off"> </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns"> <label for="address2">Address (opt)</label> <input data-value="employee.address2" maxlength="100"
                                id="address2" name="address2" class="large-12" type="text" autocorrect="off"> </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns"> <label for="city">City</label> <input data-value="employee.city" maxlength="100" id="city" name="city"
                                class="large-6teen" type="text" autocorrect="off"> </div>
                        <div class="large-4 columns">
                            <div> <label for="province">State/Province</label> <input data-value="employee.province" id="province"
                                    name="province" class="large-12" type="text" autocorrect="off"> </div>
                        </div>
                        <div class="large-4 columns"> <label for="postalCode">Postal Code</label> <input data-value="employee.postalCode" id="postalCode"
                                name="postalCode" class="large-12 zipFormatValidate" type="text"> </div>
                    </div>
                </div>
            </div>
            <div class="large-6 columns right-column">
                <div class="form-block">
                    <div class="row">
                        <div class="large-6 columns"> <label for="dateOfBirth">Date of Birth</label>
                            <div class="datepicker-wrapper has-clear-icon"> <input readonly="true" type="text" class="large-12 js-datepicker-dob datepicker hasDatepicker"
                                    id="dp1548146101347"> <a href="javascript:void(0);" class="js-clear clear"> <i class="fa fa-times"></i> </a>                                <input data-value="employee.dateofBirth | date" id="dateOfBirth" name="dateOfBirth" class="large-12 js-altField-dob"
                                    type="hidden" value=""> </div>
                        </div>
                        <div class="large-6 columns"> <label for="ssn">Social Sec/Tax ID # <span class="js-view-ssn-link-wrap">(<a class="js-view-ssn-link" href="javascript:void(0);">View</a>)</span></label>                            <input disabled="disabled" readonly="readonly" data-value="employee.ssn" id="ssn" name="ssn"
                                class="large-12 ssnFormatValidate" type="text" placeholder="Hidden"> </div>
                    </div>
                    <div class="row">
                        <div class="large-6 columns"> <label for="genderOptions">Gender</label>
                            <div class="selector" id="uniform-genderOptions"><span>Select</span><select data-value="employee.relatedGenderID" id="genderOptions" style="opacity: 0;"><option value="" selected="">Select</option><option value="2">Female</option><option value="1">Male</option></select></div>
                        </div>
                        <div class="large-6 columns"> <label for="maritalStatusOptions">Marital Status</label>
                            <div class="selector" id="uniform-maritalStatusOptions"><span>Select</span><select data-value="employee.relatedMaritalStatusID" id="maritalStatusOptions"
                                    style="opacity: 0;"><option value="" selected="">Select</option><option value="3">Divorced</option><option value="2">Married</option><option value="5">Partnership</option><option value="1">Single</option><option value="4">Widowed</option></select></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns"> <label for="country">Country</label>
                            <div class="selector" id="uniform-countryOptions"><span>Select</span><select data-value="employee.relatedCountryID" id="countryOptions" style="opacity: 0;"><option value="" selected="">Select</option><option value="207">Abkhazia</option><option value="1">Afghanistan</option><option value="208">Akrotiri and Dhekelia</option><option value="2">Albania</option><option value="209">Alderney</option><option value="3">Algeria</option><option value="4">Andorra</option><option value="5">Angola</option><option value="210">Anguilla</option><option value="6">Antigua and Barbuda</option><option value="7">Argentina</option><option value="8">Armenia</option><option value="9">Aruba</option><option value="211">Ascension Island</option><option value="10">Australia</option><option value="11">Austria</option><option value="12">Azerbaijan</option><option value="13">Bahamas, The</option><option value="14">Bahrain</option><option value="15">Bangladesh</option><option value="16">Barbados</option><option value="17">Belarus</option><option value="18">Belgium</option><option value="19">Belize</option><option value="20">Benin</option><option value="212">Bermuda</option><option value="21">Bhutan</option><option value="22">Bolivia</option><option value="213">Bonaire</option><option value="23">Bosnia and Herzegovina</option><option value="24">Botswana</option><option value="25">Brazil</option><option value="214">British Indian Ocean Territory</option><option value="215">British Virgin Islands</option><option value="26">Brunei </option><option value="27">Bulgaria</option><option value="28">Burkina Faso</option><option value="29">Burma</option><option value="30">Burundi</option><option value="31">Cambodia</option><option value="32">Cameroon</option><option value="33">Canada</option><option value="34">Cape Verde</option><option value="216">Cayman Islands</option><option value="35">Central African Republic</option><option value="36">Chad</option><option value="37">Chile</option><option value="38">China</option><option value="217">Cocos (Keeling) Islands</option><option value="39">Colombia</option><option value="40">Comoros</option><option value="41">Congo, Democratic Republic of the</option><option value="42">Congo, Republic of the</option><option value="218">Cook Islands</option><option value="43">Costa Rica</option><option value="44">Cote d'Ivoire</option><option value="45">Croatia</option><option value="46">Cuba</option><option value="47">Curacao</option><option value="48">Cyprus</option><option value="49">Czech Republic</option><option value="50">Denmark</option><option value="51">Djibouti</option><option value="52">Dominica</option><option value="53">Dominican Republic</option><option value="54">East Timor</option><option value="55">Ecuador</option><option value="56">Egypt</option><option value="57">El Salvador</option><option value="58">Equatorial Guinea</option><option value="59">Eritrea</option><option value="60">Estonia</option><option value="61">Ethiopia</option><option value="219">Falkland Islands</option><option value="220">Faroe Islands</option><option value="62">Fiji</option><option value="63">Finland</option><option value="64">France</option><option value="221">French Polynesia</option><option value="65">Gabon</option><option value="66">Gambia, The</option><option value="67">Georgia</option><option value="68">Germany</option><option value="69">Ghana</option><option value="222">Gibraltar</option><option value="70">Greece</option><option value="71">Grenada</option><option value="72">Guatemala</option><option value="223">Guernsey</option><option value="73">Guinea</option><option value="74">Guinea-Bissau</option><option value="75">Guyana</option><option value="76">Haiti</option><option value="77">Holy See</option><option value="78">Honduras</option><option value="79">Hong Kong</option><option value="80">Hungary</option><option value="81">Iceland</option><option value="82">India</option><option value="83">Indonesia</option><option value="84">Iran</option><option value="85">Iraq</option><option value="86">Ireland</option><option value="224">Isle of Man</option><option value="87">Israel</option><option value="88">Italy</option><option value="89">Jamaica</option><option value="90">Japan</option><option value="225">Jersey</option><option value="91">Jordan</option><option value="92">Kazakhstan</option><option value="93">Kenya</option><option value="94">Kiribati</option><option value="97">Kosovo</option><option value="98">Kuwait</option><option value="99">Kyrgyzstan</option><option value="100">Laos</option><option value="101">Latvia</option><option value="102">Lebanon</option><option value="103">Lesotho</option><option value="104">Liberia</option><option value="105">Libya</option><option value="106">Liechtenstein</option><option value="107">Lithuania</option><option value="108">Luxembourg</option><option value="109">Macau</option><option value="110">Macedonia</option><option value="111">Madagascar</option><option value="112">Malawi</option><option value="113">Malaysia</option><option value="114">Maldives</option><option value="115">Mali</option><option value="116">Malta</option><option value="117">Marshall Islands</option><option value="118">Mauritania</option><option value="119">Mauritius</option><option value="120">Mexico</option><option value="121">Micronesia</option><option value="122">Moldova</option><option value="123">Monaco</option><option value="124">Mongolia</option><option value="125">Montenegro</option><option value="227">Montserrat</option><option value="126">Morocco</option><option value="127">Mozambique</option><option value="229">Nagorno-Karabakh Republic</option><option value="128">Namibia</option><option value="129">Nauru</option><option value="130">Nepal</option><option value="131">Netherlands</option><option value="132">Netherlands Antilles</option><option value="230">New Caledonia</option><option value="133">New Zealand</option><option value="134">Nicaragua</option><option value="135">Niger</option><option value="136">Nigeria</option><option value="231">Niue</option><option value="137">North Korea</option><option value="237">Northern Cyprus</option><option value="138">Norway</option><option value="139">Oman</option><option value="140">Pakistan</option><option value="141">Palau</option><option value="142">Palestinian Territories</option><option value="143">Panama</option><option value="144">Papua New Guinea</option><option value="145">Paraguay</option><option value="146">Peru</option><option value="147">Philippines</option><option value="232">Pitcairn Islands</option><option value="148">Poland</option><option value="149">Portugal</option><option value="150">Qatar</option><option value="151">Romania</option><option value="152">Russia</option><option value="153">Rwanda</option><option value="238">Saba</option><option value="239">Sahrawi Republic</option><option value="233">Saint Helena</option><option value="154">Saint Kitts and Nevis</option><option value="155">Saint Lucia</option><option value="156">Saint Vincent and the Grenadines</option><option value="157">Samoa </option><option value="158">San Marino</option><option value="159">Sao Tome and Principe</option><option value="160">Saudi Arabia</option><option value="161">Senegal</option><option value="162">Serbia</option><option value="163">Seychelles</option><option value="164">Sierra Leone</option><option value="165">Singapore</option><option value="240">Sint Eustatius</option><option value="166">Sint Maarten</option><option value="167">Slovakia</option><option value="168">Slovenia</option><option value="169">Solomon Islands</option><option value="170">Somalia</option><option value="242">Somaliland</option><option value="171">South Africa</option><option value="234">South Georgia and the South Sandwich Islands</option><option value="172">South Korea</option><option value="243">South Ossetia</option><option value="173">South Sudan</option><option value="174">Spain</option><option value="175">Sri Lanka</option><option value="176">Sudan</option><option value="177">Suriname</option><option value="178">Swaziland </option><option value="179">Sweden</option><option value="180">Switzerland</option><option value="181">Syria</option><option value="182">Taiwan</option><option value="183">Tajikistan</option><option value="184">Tanzania</option><option value="185">Thailand</option><option value="186">Timor-Leste</option><option value="187">Togo</option><option value="188">Tonga</option><option value="244">Transnistria</option><option value="189">Trinidad and Tobago</option><option value="235">Tristan da Cunha</option><option value="190">Tunisia</option><option value="191">Turkey</option><option value="192">Turkmenistan</option><option value="236">Turks and Caicos Islands</option><option value="193">Tuvalu</option><option value="194">Uganda</option><option value="195">Ukraine</option><option value="196">United Arab Emirates</option><option value="197">United Kingdom</option><option value="206">United States</option><option value="198">Uruguay</option><option value="199">Uzbekistan</option><option value="200">Vanuatu</option><option value="245">Vatican City</option><option value="201">Venezuela</option><option value="202">Vietnam</option><option value="246">Wallis and Futuna</option><option value="203">Yemen</option><option value="204">Zambia</option><option value="205">Zimbabwe</option></select></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-1 columns"> <br> </div>
        </div>


    </form>

</div>
@endsection
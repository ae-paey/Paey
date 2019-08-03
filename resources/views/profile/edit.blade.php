@extends('layouts.app', ['title' => __('User Profile')])

@section('title')
 - Profile 
@endsection

@section('css')
  <link type="text/css" href="{{ asset('argon') }}/css/profile.css" rel="stylesheet">
@endsection

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the transaction you\'ve made with your work and lots more'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('images/companies/logo.png') }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">{{ __('Friends') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">{{ __('Photos') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Comments') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ __('Bucharest, Romania') }}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ __('Solution Manager - Creative Tim Officer') }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ __('University of Computer Science') }}
                            </div>
                            <hr class="my-4" />
                            <p>{{ __('Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.') }}</p>
                            <a href="#">{{ __('Show more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="tab">
                      <button id="defaultOpen" class="tablinks btn btn-primary" onclick="editUser(event, 'Profile')">Edit Profile</button>
                      <button class="tablinks btn btn-primary" onclick="editUser(event, 'Company')">Edit Company</button>
                      <button class="tablinks btn btn-primary" onclick="editUser(event, 'Account')">Edit Account</button>
                    </div>
                  </div>
                </div>
                <div id="Profile" class="card-body tabcontent">
                  <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                      @csrf
                      @method('put')

                      <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                      
                      @if (session('status'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{ session('status') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      @endif

                      <div class="pl-lg-4">
                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                              <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                              <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="text-center">
                              <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                          </div>
                      </div>
                  </form>
                  <hr class="my-4" />
                  <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                      @csrf
                      @method('put')

                      <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                      @if (session('password_status'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{ session('password_status') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      @endif

                      <div class="pl-lg-4">
                          <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                              <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                              
                              @if ($errors->has('old_password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('old_password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                              <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                              
                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                              <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                              <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                          </div>

                          <div class="text-center">
                              <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                          </div>
                      </div>
                  </form>
                </div>
                <div id="Company" class="card-body tabcontent">
                  <form method="post" action="{{ route('profile.company') }}" autocomplete="off">
                      @csrf
                      @method('put')

                      <h6 class="heading-small text-muted mb-4">{{ __('Company information') }}</h6>
                      
                      @if(Session::has('companyUpdate'))
                        <div class="alert alert-success alert-dismissible fade show">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          {{ Session::get('companyUpdate') }}
                        </div>
                      @endif

                      <div class="pl-lg-4">
                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                              <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                              <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="text-center">
                              <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                          </div>
                      </div>
                  </form>
                </div>
                <div id="Account" class="card-body tabcontent">
                  <form method="post" action="{{ route('profile.account', $user) }}" autocomplete="on">
                    @csrf

                    <h6 class="heading-small text-muted mb-4">{{ __('Account') }}</h6>

                    @if(Session::has('accountUpdate'))
                      <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ Session::get('accountUpdate') }}
                      </div>
                    @endif

                    <div class="pl-lg-4">
                      <div class="form-group{{ $errors->has('ae_address') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-ae-address">{{ __('æternity Wallet Address') }}</label>
                        <input type="text" name="ae_address" id="input-ae-address" class="form-control form-control-alternative{{ $errors->has('ae_address') ? ' is-invalid' : '' }}" placeholder="{{ __('æternity Wallet Address') }}" value="{{ old('ae_address', auth()->user()->ae_address) }}" required>
                        
                        @if ($errors->has('ae_address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ae_address') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('bank_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-bank-name">{{ __('Bank Name') }}</label>
                        <input type="text" name="bank_name" id="input-bank-name" class="form-control form-control-alternative{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Name') }}" value="{{ old('bank_name', auth()->user()->bank_name) }}" required>
                        
                        @if ($errors->has('bank_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('baccount_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-bank-account-name">{{ __('Bank Account Name') }}</label>
                        <input type="text" name="baccount_name" id="input-bank-account-name" class="form-control form-control-alternative{{ $errors->has('baccount_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account Name') }}" value="{{ old('baccount_name', auth()->user()->baccount_name) }}" required>
                        
                        @if ($errors->has('baccount_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('baccount_name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('baccount_number') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-bank-account-number">{{ __('Bank Account Number') }}</label>
                        <input type="text" name="baccount_number" id="input-bank-account-number" class="form-control form-control-alternative{{ $errors->has('baccount_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account Number') }}" value="{{ old('baccount_number', auth()->user()->baccount_number) }}" required>
                        
                        @if ($errors->has('baccount_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('baccount_number') }}</strong>
                            </span>
                        @endif
                      </div>

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary mt-4">{{ __('Save') }}</button>
                          </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
  <script src="{{ asset('argon') }}/js/profile.js"></script>
@endpush
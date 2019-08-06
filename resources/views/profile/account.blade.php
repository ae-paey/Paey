@extends('layouts.app', ['title' => __('Profile')])

@section('title')
 - Profile 
@endsection

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. $user->name,
        'description' => __('This is your account profile page. You can change your wallet address and bank details here'),
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
                                {{ $user->name }}<span class="font-weight-light"></span>
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
                    <div class="col-8">
                      <h3 class="mb-0">My account</h3>
                    </div>
                    <div class="col-4 text-right">
                      <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-primary">Profile</a>
                      <a href="{{ route('company.edit') }}" class="btn btn-sm btn-primary">Company</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form method="POST" role="form" action="{{ route('account.update') }}" autocomplete="on">
                      {{ csrf_field() }}

                    <h6 class="heading-small text-muted mb-4">{{ __('Account') }}</h6>

                    @if (session('status'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                    <div class="pl-lg-4">
                      <div class="form-group{{ $errors->has('ae_address') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-ae-address">{{ __('æternity Wallet Address') }}</label>
                        <input type="text" name="ae_address" id="input-ae-address" class="form-control form-control-alternative{{ $errors->has('ae_address') ? ' is-invalid' : '' }}" placeholder="{{ __('æternity Wallet Address') }}" value="{{ old('ae_address', $user->ae_address) }}" required>
                        
                        @if ($errors->has('ae_address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ae_address') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('bank_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-bank-name">{{ __('Bank Name') }}</label>
                        <input type="text" name="bank_name" id="input-bank-name" class="form-control form-control-alternative{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Name') }}" value="{{ old('bank_name', $user->bank_name) }}" required>
                        
                        @if ($errors->has('bank_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('baccount_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-bank-account-name">{{ __('Bank Account Name') }}</label>
                        <input type="text" name="baccount_name" id="input-bank-account-name" class="form-control form-control-alternative{{ $errors->has('baccount_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account Name') }}" value="{{ old('baccount_name', $user->baccount_name) }}" required>
                        
                        @if ($errors->has('baccount_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('baccount_name') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('baccount_number') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-bank-account-number">{{ __('Bank Account Number') }}</label>
                        <input type="text" name="baccount_number" id="input-bank-account-number" class="form-control form-control-alternative{{ $errors->has('baccount_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account Number') }}" value="{{ old('baccount_number', $user->baccount_number) }}" required>
                        
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
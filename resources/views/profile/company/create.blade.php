@extends('layouts.app', ['title' => __('Profile')])

@section('title')
 - Add Company 
@endsection

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is where you add your orgaization details to start receiving pæyment'),
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
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}
                            </h3>
                            <div>
                              {{ auth()->user()->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <h3 class="mb-0">My account</h3>
                    </div>
                    <div class="col-6 text-right">
                      <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-primary">Profile</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('company.store') }}" autocomplete="on">
                      @csrf

                      <h6 class="heading-small text-muted mb-4">{{ __('Company information') }}</h6>

                      <div class="pl-lg-4">
                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-company-name">{{ __('Company Name') }}</label>
                              <input type="text" name="name" id="input-company-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Name') }}" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-company-email">{{ __('Email Address') }}</label>
                              <input type="email" name="email" id="input-company-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Email') }}" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-company-position">{{ __('Role In Company') }}</label>
                              <input type="text" name="position" id="input-company-position" class="form-control form-control-alternative{{ $errors->has('position') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Position') }}" value="{{ old('position') }}" required>

                              @if ($errors->has('position'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('position') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-company-location">{{ __('Company Loaction') }}</label>
                              <input type="text" name="location" id="input-company-location" class="form-control form-control-alternative{{ $errors->has('location') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Loaction') }}" value="{{ old('location') }}" required>

                              @if ($errors->has('location'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('location') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                              <label class="form-control-label" for="input-company-phone">{{ __('Company Phone') }}</label>
                              <input type="tel" name="phone" id="input-company-phone" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Phone') }}" value="{{ old('phone') }}" required>

                              @if ($errors->has('phone'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group{{ $errors->has('ae_address') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-ae-address">{{ __('æternity Wallet Address') }}</label>
                            <input type="text" name="ae_address" id="input-ae-address" class="form-control form-control-alternative{{ $errors->has('ae_address') ? ' is-invalid' : '' }}" placeholder="{{ __('æternity Wallet Address') }}" value="{{ old('ae_address') }}" required>
                            
                            @if ($errors->has('ae_address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ae_address') }}</strong>
                                </span>
                            @endif
                          </div>
                          <div class="form-group{{ $errors->has('bank_name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-bank-name">{{ __('Bank Name') }}</label>
                            <input type="text" name="bank_name" id="input-bank-name" class="form-control form-control-alternative{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Name') }}" value="{{ old('bank_name') }}" required>
                            
                            @if ($errors->has('bank_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bank_name') }}</strong>
                                </span>
                            @endif
                          </div>
                          <div class="form-group{{ $errors->has('baccount_name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-bank-account-name">{{ __('Bank Account Name') }}</label>
                            <input type="text" name="baccount_name" id="input-bank-account-name" class="form-control form-control-alternative{{ $errors->has('baccount_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account Name') }}" value="{{ old('baccount_name') }}" required>
                            
                            @if ($errors->has('baccount_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('baccount_name') }}</strong>
                                </span>
                            @endif
                          </div>
                          <div class="form-group{{ $errors->has('baccount_no') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-bank-account-number">{{ __('Bank Account Number') }}</label>
                            <input type="text" name="baccount_no" id="input-bank-account-number" class="form-control form-control-alternative{{ $errors->has('baccount_no') ? ' is-invalid' : '' }}" placeholder="{{ __('Bank Account Number') }}" value="{{ old('baccount_no') }}" required>
                            
                            @if ($errors->has('baccount_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('baccount_no') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="text-center">
                              <button type="submit" id="createCompany" class="btn btn-success mt-4">{{ __('Save') }}</button>
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
  <script src="{{ asset('js/firebase/company.js') }}"></script>
@endpush
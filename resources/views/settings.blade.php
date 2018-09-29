@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header"><b>Settings</b> // Change your account details here.</div>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('settings') }}">
                        {{ csrf_field() }}
                            <div class="row">
                             <div class="col-md-6 mb-3">
                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password">Current Password</label>
                                <input id="current-password" type="password" tabindex="1" class="form-control" name="current-password" required>
 
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     </div>

                            <div class="row">
                            <div class="col-md-6 mb-3">
                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password">New Password</label>
                                <input id="new-password" type="password" tabindex="2" class="form-control" name="new-password">
 
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">E-Mail Adresse</label>
                            <input type="email" name="new-email" tabindex="4" class="form-control" id="new-email" placeholder="{{ Auth::user()->email }}">
                        </div>
                        </div>
                            
                            <div class="row">
                            <div class="col-md-6 mb-3">
                            <div class="form-group">
                            <label for="new-password-confirm">Confirm New Password</label>
                                <input id="new-password-confirm" type="password" tabindex="3" class="form-control" name="new-password_confirmation">
                            </div>
                        </div>
                              
                              <div class="col-md-6 mb-3">
                              <div class="form-group{{ $errors->has('new-sex') ? ' has-error' : '' }}">
                              <label for="new-sex">Gender</label>
                              <select name="new-sex" tabindex="6" class="form-control" id="new-sex">
                               @if (Auth::user()->sex == '0')
                                 <option hidden>Boy</option>
                               @else
                                 <option hidden>Girl</option>
                               @endif
                                 <option value='0'>Boy</option>
                                 <option value='1'>Girl</option>
                             </select>
                           </div>
                        </div>
                        </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection

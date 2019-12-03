@extends('layouts.creative')

@section('content')
<div class="container">
    
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">                
                    <div class="card-body p-5">
                        <form>
                          <h3 class="font-weight-bold">Sign In</h3>
                          <p>Please fill in your data : </p>                          
                        </form>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" placeholder="E-Mail" type="email" class="px-3 py-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
    
                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" placeholder="Password" type="password" class="px-3 py-4 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
    
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary w-100 mx-0">
                                    {{ __('Login') }}
                                  </button>
                                </div>
                              </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-sm">
                                    <div class="form-check float-left ml-1">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
    
                                <div class="col-sm">
                                  @if (Route::has('password.request'))
                                      <a class="float-right" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                  @endif
                                </div>
                            </div>
    
                        </form>
                    </div>
                    <div class="card-footer aqua-gradient border-top-0 text-center pt-4">
                        <p class="text-black">Create an account <a href="#">here</a></p>
                    </div>
                </div>
            </div>
        </div>
    
</div>
@endsection

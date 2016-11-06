@extends('auth.main')

@section('content')
        <div id="register" class="form registration_form" style="opacity:1">
          <section class="login_content">
            <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
              <h1>Create Account</h1>
              <div {{ $errors->has('username') ? ' has-error' : '' }}">
                <input name="username" value="{{old('username')}}" type="text" class="form-control" placeholder="Username" required="" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
              </div>
               <div {{ $errors->has('email') ? ' has-error' : '' }}">
                <input name="email" value="{{old('email')}}" type="email" class="form-control" placeholder="Email" required="" />
                @if ($errors->has('emial'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div {{ $errors->has('password') ? ' has-error' : '' }}">
                <input name="password" value="{{old('password')}}" type="password" class="form-control" placeholder="Password" required="" />
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input name="password_confirmation" value="{{old('password_confirmation')}}" type="password" class="form-control" placeholder="Password Confirmation" required="" />
              </div>              
               
              <div>
                <button class="btn btn-default submit" type="submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
@endsection

@extends('layouts.backend')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

      <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

      <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
          name="password" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-6 offset-md-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>

          <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
          </label>
        </div>
      </div>
    </div>

    <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div> --}}

<!-- Login -->
<div id="login" class="tokyo_tm_section login {{(!auth()->check() ? 'active' : '')}} ">
  <div class="container">
    <div class="tokyo_tm_contact">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>Login</span>
            <h3>Get in Touch</h3>
            <p>If your have question then go to contact and message me.</p>
          </div>
        </div>
      </div>

      <div class="fields">
        <form method="POST" action="{{ route('login') }}" class="contact_form" id="contact_form" autocomplete="off">
          @csrf
          <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
          <div class="empty_notice"><span>Please Fill Required Fields</span></div>
          <div class="first">
            <ul>
              <li>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </li>
              <li>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                  required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </li>
            </ul>
          </div>
          <div class="tokyo_tm_button" data-position="left">

            <button type="submit" id="send_message">
              Login
            </button>
            <a href="index.html">
              <span>Back</span>

            </a>
          </div>

          <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

        </form>
      </div>
    </div>
  </div>
</div>
<!-- Login --
<!-- register -->
{{-- <div id="register" class="tokyo_tm_section login ">
  <div class="container">
    <div class="tokyo_tm_contact">
      <div class="tokyo_tm_title">
        <div class="title_flex">
          <div class="left">
            <span>Register</span>
            <h3>Get in Touch</h3>
            <p>If your have question then go to contact and message me.</p>
          </div>
        </div>
      </div>

      <div class="fields">
        <form method="POST" action="{{ route('register') }}" class="contact_form" autocomplete="off">
@csrf
<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
<div class="empty_notice"><span>Please Fill Required Fields</span></div>
<div class="first">
  <ul>
    <li>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </li>
    <li>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </li>
    <li>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required
        autocomplete="new-password" placeholder="New-Password">

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </li>
    <li>
      <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
        placeholder="Confirm Password">
    </li>
  </ul>
</div>
<div class="tokyo_tm_button" data-position="left">
  <button type="submit">
    {{ __('Register') }}
  </button>
</div>

<!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

</form>
</div>
</div>
</div>
</div> --}}
<!-- /register -->

<!-- Forget Password -->
{{-- <div id="forget" class="tokyo_tm_section login ">
    <div class="container">
      <div class="tokyo_tm_contact">
        <div class="tokyo_tm_title">
          <div class="title_flex">
            <div class="left">
              <span>Forget Password</span>
              <h3>Get in Touch</h3>
              <p>If your have question then go to contact  and message me.</p>
            </div>
          </div>
        </div>
       
        <div class="fields">
          <form method="POST" action="{{ route('password.email') }}" class="contact_form" autocomplete="off">
@csrf
<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
<div class="first">
  <ul>

    <li>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </li>
  </ul>
</div>
<div class="tokyo_tm_button" data-position="left">
  <a id="send_message" href="#">
    <span>Submit</span>
  </a>
  <a href="index.html">
    <span>Back</span>

  </a>
</div>

<!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

</form>
</div>
</div>
</div>
</div> --}}
<!-- /Forget Password  -->
@endsection
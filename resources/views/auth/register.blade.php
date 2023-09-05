<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>User Register</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> naviea<span class="tx-info">soft</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-40">The User Register Form</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif
                <div class="form-group">
                    <input type="text" :value="__('Name')" name="name" class="form-control fc-outline-dark" placeholder="Enter your username" :value="old('name')" required autofocus autocomplete="name" >
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="email" :value="__('Email')" name="email" class="form-control fc-outline-dark" :value="old('email')" placeholder="Enter your email" required autocomplete="username">
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password"                             name="password" :value="__('Password')" class="form-control fc-outline-dark" placeholder="Enter your password" required autocomplete="new-password" >
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" :value="__('Confirm Password')" class="form-control fc-outline-dark" placeholder="confirm password"                             name="password_confirmation" required autocomplete="new-password">
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>
          <div class="mg-t-40 tx-center">Already registered?<a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

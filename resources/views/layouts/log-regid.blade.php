<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="plugins/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="plugins/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="plugins/css/responsive.css">
  <!-- Custom CSS -->
  <link href="plugins/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="plugins/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="plugins/css/jcarousel.css" rel="stylesheet" />
  <link href="plugins/css/flexslider.css" rel="stylesheet" />
  <link href="plugins/css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="plugins/skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="plugins/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="plugins/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="plugins/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="plugins/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="plugins/sico/favicon.png" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="plugins/css/bootstrap.min.css">



</head>
<body>
    <div id="wrapper" >
        <!-- toggle top area -->
        <div class="hidden-top" style="background-color: #432382">
          <div class="hidden-top-inner container">
            <div class="row" >
              <div class="span12">
                <ul>
                  <li><strong>We are available for any custom works this month</strong></li>
                  <li>Main office: Springville center X264, Park Ave S.01</li>
                  <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end toggle top area -->
        <!-- start header -->
        <header>
          <div class="container ">
            <!-- hidden top area toggle link -->
            <div id="header-hidden-link">
              <a href="#" class="toggle-link" style="background-color: #432382" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
            </div>
            <!-- end toggle link -->
            <div class="row nomargin">
              <div class="span12">
                <div class="headnav">
                  <ul>
                    <li><a href="#mySignup" style="color: #432382" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                    <li><a href="#mySignin" style="color: #432382" data-toggle="modal">Sign in</a></li>

                  </ul>
                </div>
                <!-- Signup Modal -->
                <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                  <div class="modal-header" style="background-color: #432382">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal"  method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="control-group">
                        <label class="control-label" for="inputNom">Nom </label>
                        <div class="controls">
                            <input placeholder="Nom" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPrénom">Prénom</label>
                        <div class="controls">
                           <input placeholder="Prénom" id="inputprenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                          @error('prenom')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputTéléphone">Téléphone</label>
                        <div class="controls">
                              <input placeholder="Telephone" id="inputtelephone" type="numerique" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                          @error('telephone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                              <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="password-confirm">Confirm Password</label>
                        <div class="controls">
                              <input placeholder="Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn">Sign up</button>
                        </div>
                        <p class="aligncenter margintop20">
                          Already have an account? <a href="#mySignin" style="color: #432382" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end signup modal -->
                <!-- Sign in Modal -->
                <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                  <div class="modal-header" style="background-color: #432382">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal"  method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="control-group">
                           <label for="email" class="control-label">Email</label>
                        <div class="controls">
                            <input id="email" type="email" class="form-control " name="email"  required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                      <div class="control-group">
                          <label for="password" class="control-label">Password</label>
                        <div class="controls">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn">Sign in</button>
                        </div>
                        <p class="aligncenter margintop20">
                          Forgot password? <a href="#myReset" style="color: #432382" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end signin modal -->
                <!-- Reset Modal -->
                <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                  <div class="modal-header" style="background-color: #432382">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="{{route('password.email') }}">
                         @csrf
                      <div class="control-group">
                        <label class="control-label" for="inputResetEmail">Email</label>
                        <div class="controls">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <button type="submit" class="btn">Reset password</button>
                        </div>
                        <p class="aligncenter margintop20">
                          We will send instructions on how to reset your password to your inbox
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end reset modal -->
              </div>
            </div>
            {{-- <div class="row">
              <div class="span4">
                <div class="logo">
                  <a href="index.html"><img src="plugins/img/logo.png" alt="" class="logo" style="width:150px;height:86px;"/></a>

                </div>
              </div>
              <div class="span8">
                <div class="navbar navbar-static-top">
                  <div class="navigation">
                    <nav>
                      <ul class="nav topnav">
                          <a href="index.html">Home </a>
                             <a href="formulaire">formulaire </a>
                             <a href="contact.html">Contact </a>

                  <!-- end navigation -->
                </div>
              </div>
            </div>
          </div> --}}
        </header>

        <main class="py-4">
            @yield('content')
        </main>
</body>

</html>

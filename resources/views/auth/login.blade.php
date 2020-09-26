<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Include the above in your HEAD tag -->
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
    </head>
    <body>
    

        







<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="{{ route('login') }}"  method="POST">
            {{ csrf_field() }}
          <fieldset class="clearfix">

          <p><span for="email" class="fa fa-user"></span><input type="text" id="email"  name="email" Placeholder="Email" value="{{old('email')}}" required autofocus></p> <!-- JS because of IE support; better: placeholder="Password" -->
       

            @if ($errors->has('email'))
            <span class="help-block">
                <div style="font-size:15px ;" class="text-light">* {{ $errors->first('email') }}</div>
            </span>
        @endif

            <p><span for="password" class="fa fa-lock"></span><input type="password" id="password"  name="password" Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
       
            @if ($errors->has('password'))
            <span class="help-block">
                <div class="text-danger">* {{ $errors->first('password') }}</div>
            </span>
        @endif
             <div>
                               
     <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Sign In"></span>
      </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">MedicalSystem
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>
</body>
</html>
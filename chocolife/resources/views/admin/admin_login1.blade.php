<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chocolife</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link href='https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="wrapper-w">
      <div id="active-bar">
        <div class="container">
          <div class="row">
            <div class="active">
              <div class="col-md-6 col-xs-12 col-sm-6 links">
                <ul>
                  <li><a href="#">Chocol<span class="food">Food</span></a></li>
                  <li><a href="#">Choco<span class="travel">Travel</span></a></li>
                  <li><a href="#">Lens<span class="Mark">Mark</span></a></li>
                  <li><a href="#"><span class="doctor">i</span>Doctor</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4
                "></div>
                <div class="col-md-4 col-md-offset-4">
               <div class="block-login">
                        @if(Session::has('message_error'))
            <div class="alert alert-error alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong>{!! session('message_error') !!}</strong>
            </div>            
           @endif  
            @if(Session::has('message_success'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong>{!! session('message_success') !!}</strong>
            </div>            
           @endif 
                               <form method="post" action="{{action('AdminController@login')}}">{{ csrf_field() }}
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
      <button type="submit" class="btn btn-default">Login</button>
  </form>         

               </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
  </body>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/typed.min.js"></script>
    <script src="/js/scripts.js"></script>
</html>

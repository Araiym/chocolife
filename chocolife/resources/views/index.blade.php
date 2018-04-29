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
	<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
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
              <div class="col-md-6 hidden-xs active-btn text-right">
                <ul>
                  @if (Auth::guest())
                  <li><a href="/register"><span>Регистрация</span></a></li>
                  <li><a href="/login">Вход</a></li>
                   @else
                      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="help-bar">
        <div class="container">
          <div class="row row-table">
            <div class="help text-center">
              <div class="col-md-3 col-xs-12 region">
                <select class="region-btn" name="#">
                  <option value="#">Алматы</option>
                  <option value="#">Астана</option>
                </select>
              </div>
              <div class="col-md-3 col-xs-12 helped">
                <a href="#"><i class="far fa-lightbulb"></i> <span>Нужна помощь?</span></a>
              </div>
              <div class="col-md-3 col-xs-12 security text-center">
                <a href="#"><i class="fas fa-key"></i> <span>Защита покупателей</span></a>
              </div>
              <div class="col-md-3 col-xs-12 link-back">
                <a href="#"><i class="far fa-envelope"></i> <span>Обратная связь</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="main-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="mobile-button">
              <a href="#menu" class="menu-link hidden-md hidden-lg"><span></span></a>
            </div>
            <div class="menu">
              <ul>
                <li><a href="#">Все</a></li>
                <li><a href="#">Развлечение и Отдых</a></li>
                <li><a href="#">Красота и Здоровье</a></li>
                <li><img src="images/logo.png" alt=""></li>
                <li><a href="#">Спорт</a></li>
                <li><a href="#">Товары</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Еда</a></li>
                <li><a href="#">Туризм,отели</a></li>
              </ul>
              <div class="active-btn text-right hidden-md hidden-lg">
                <ul>
                  <li><a href="{{url('/register')}}"><span>Регистрация</span></a></li>
                  <li><a href="{{url('/register')}}">Вход</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="wall">
        <div class="wall-logo text-center">
          <img src="images/wall-logo.png" alt="">
          <div class="typed-text">
            <p><span class="typed-txt"></span></p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form action="" class="search text-center">
                <input type="text" class="search-input" placeholder="Найти среди 610 акций">
                <input type="button" class="search-btn" value="Найти">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="category-block">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-md-offset-1 products text-center">
              <ul>
              @foreach($show as $var)
                <li class="block-item">
                  <span class="descr"><h3>{{$var->name_sales}}</h3>
                  <h4>{{$var->description}}</h4>
                  <p><span>10 000</span>  {{$var->price}}</p>
                  <a href="/home/{{$var->id_sales}}"><button class="product-btn">Подробнее</button></a>
                </span><img class="img_item" src="/storage/img/{{$var->pictures->name}}" alt="">
                </li>
              @endforeach
              
              </ul>
            </div>
          </div>
          <div class="row">
             <div class="col-md-4"></div>
        <div class="col-md-4">{{$show->links()}}</div>
        <div class="col-md-4"></div>
          </div>
        </div>
      </div>
     <footer class="nb-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about">
	
	<div class="social-media">
		<ul class="list-inline">
			<li><a href="#"><i class="fab fa-facebook"></i></a></li>
			<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
			<li><a href="#" title=""><i class="fab fa-google-plus"></i></a></li>
			<li><a href="#" title=""><i class="fab fa-linkedin"></i></a></li>
		</ul>
	</div>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Help Center</h2>
	<ul class="list-unstyled">
		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Customer information</h2>
	<ul class="list-unstyled">
		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Security & privacy</h2>
	<ul class="list-unstyled">
		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
		<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
	</ul>
</div>
</div>

<div class="col-md-3 col-sm-6">
<div class="footer-info-single">
	<h2 class="title">Payment</h2>
	<p>Chocolife.me – купонный сервис №1 в Казахстане. В сервисе Chocolife.me представлены различные услуги со скидками до 90%.</p>
	
</div>
</div>
</div>
</div>

<section class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-6">
<p>Copyright © 2017.Chocolife</p>
</div>
<div class="col-sm-6"></div>
</div>
</div>
</section>
</footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

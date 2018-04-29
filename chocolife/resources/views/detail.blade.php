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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div id="active-bar">
        <div class="container">
          <div class="row">
            <div class="active">
              <div class="col-md-6 col-xs-12 col-sm-6 links">
                <ul>
                  <li><a href="#">Choco<span class="food">Food</span></a></li>
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
                
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="wall">
        <div class="wall-logo text-center">
          <img src="/images/wall-logo.png" alt="">
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
      <div id="product-wall">
        <div class="container">
          <div class="products">
            <div class="col-md-8 slider">
                <div class="by-day"></div>
              <h3>{{$showItem->sales->name_sales}}</h3>
              <h4>{{$showItem->sales->description}}</h4>
              <div class="sliders">
                  <div class="slide slide1">
                    <img src="/images/{{$showItem->pictures->name}}">
                  </div>
                  <div class="slide slide2"></div>
                  <div class="slide slide3"></div>
                  <div class="slide slide4"></div>
             </div>
            </div>
            <div class="col-md-4 inf-product">
            <div class="use-day">
              <p>Можно воспользоваться до 28 февраля 2018 года</p>
              <div class="price">
                <h3>{{$showItem->price}} тг</h3>
                <input type="button" class="buy-btn" value="Купить">
                <p>Купили 845 человек</p>
                <hr>
              </div>
              <div class="sale-end">
                <p>До завершения акции осталось:</p>
                <div class="clocks">
                  <i class="far fa-clock"></i><h3 id="clock">08:05:25</h3>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
	  <div class="container">
	  <h2>Условия акции: </h2>
	  <h1>Проживание в номере «Standart» на 1 сутки (на двоих человек) - 20 000 тг. вместо 36 000 тг.<br>
          Проживание в номере «Standart De Luxe» на 1 сутки (на двоих человек) - 25 000 тг. вместо 46 000 тг.<br>
          Проживание в номере «Luxe» на 1 сутки (на двоих человек) - 35 000 тг. вместо 51 000 тг.<br>
          Проживание в номере «Super De Luxe» на 1 сутки (на двоих человек) - 45 000 тг. вместо 66 000 тг.<br> 
          Проживание в номере «Diplomat Duplex» на 1 сутки (на четырех человек) - 70 000 тг. вместо 112 000 тг. <br>
          Условия:<br>
          8, 21 и 22 марта 2018 г. сертификат не действует.<br>
          В стоимость сертификата входит проживание и разовый вход в Тау SPA-centre.<br>
          Если Вы посетили Тау SPA-centre и вышли, то повторный вход оплачивается отдельно – 3 000 тг./с человека.<br>
</h1>
@if (Auth::guest())
<div class="col-md-12">
   <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Отзывы</a></li>
   </ul>
  <div class="tab-content">
   <div id="home" class="tab-pane fade in active">
    <p></p>
   </div>
  <div id="menu1" class="tab-pane fade">
<div class="feedback">
         @foreach($show as $commen)
        <div class="show-feed">
        <div class="container">
            <div class="row">                
                <div class="col-md-3">
                    <div class="name">
                     <span class="name_user"><b>{{$commen->name_user}}</b></span> 
                   </div>

                </div>                
                <div class="col-md-6">
                   <div class="feedbackOfUser">
                          {{$commen->feedback}}
                   </div>
                   
                </div>                
            </div>
        </div>
        </div>
        @endforeach
  </div>
  </div>
</div>
	  </div>
  </div>
    @elseif(Auth::user())
<div class="col-md-12">
   <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Отзывы</a></li>
   </ul>
  <div class="tab-content">
   <div id="home" class="tab-pane fade in active">
    <p></p>
   </div>
  <div id="menu1" class="tab-pane fade">
<div class="feedback">
         @foreach($show as $commen)
        <div class="show-feed">
        <div class="container">
            <div class="row">                
                <div class="col-md-3">
                    <div class="name">
                     <span class="name_user"><b>{{$commen->name_user}}</b></span> 
                   </div>

                </div>                
                <div class="col-md-6">
                   <div class="feedbackOfUser">
                          {{$commen->feedback}}
                   </div>
                   
                </div>                
            </div>
        </div>
        </div>
        @endforeach
  </div>
  </div>
</div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
          <form class="form-horizontal" id="ajax"  method="post">
            <input type="hidden" value="{{$showItem->sales->id_sales}}" name="id_sale">
     {{ csrf_field() }}
          <fieldset>
            <legend class="text-center">Оставить отзыв</legend>
            <div class="form-group">

              <div class="col-md-9">
                <input id="name" name="name" type="hidden" value="{{ Auth::user()->name }}">
                 <input id="name" name="id_user" type="hidden" value="{{ Auth::user()->id }}">
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Ваш отзыв:</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Введите ваш отзыва о этом продукте" rows="5"></textarea>
              </div>
            </div> 
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg feedback_submit">Отправить</button>
              </div>
            </div>
          </fieldset>
          </form>
    </div>
  </div>
</div>
@endif
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
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/typed.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script>
      $(document).on('click', '.feedback_submit', function(e) {
  e.preventDefault();
    $.ajax({
   type: 'POST',
   url: '/feedback',
    data:$('#ajax').serialize(),
      success: function(data){
                    $('.feedback').append("<div class='container'><div class='row'><div class='col-md-3'><div class='name'><span class='name_user'><b>"+data.name_user+"</b></span></div></div><div class='col-md-6'><div class='feedbackOfUser'>"+data.feedback+"</div></div</div>");}

      ,
       error: function(mas){
         alert("Please write");
      }
  
  
});




});
    </script>
  </body>
</html>
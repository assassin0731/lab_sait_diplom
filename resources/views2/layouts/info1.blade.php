<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<style>
        figure {
            float: left;
            margin: 0 20px 0;
        }
            figcaption {
                text-align: center;
            }
    </style>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="/css/default_test.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/default_test.css" rel="stylesheet" type="text/css">
<link href="fonts.css" rel="stylesheet" type="text/css">


</head>
<body>
	 <div id="topNavLine" class="container2">
		 <div id="list-contact">

			 <div id="mail" >

				 <img src="../images/image1-460x460.png" width="23" height="" align="left" />
					 <a href="#" style="font-size:16px; color:#bbbbbb;">foodlab@ncsm.ru</a>

			 </div>

				 <div id="phone" >
				 <img src="../images/telefono-png-8.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">(383)210-00-65</a>
			 </div>
			 <div id="address" >
				 <img src="../images/download-036d71fe5368cf7116041cb575433e28.png" width="23" height="" align="left"  />

					 <a href="#" style="font-size:16px; color:#bbbbbb;">630004, г. Новосибирск, ул. Революции, 36</a>
			 </div>

		 </div>
	</div>
<div id="header-wrapper">

  <div id="header" class="container">

	  <div id="logo1">
		  <img src="../images/logo.png" width="100" height="" align="left" />
	  </div>
	<nav>
	<div class="left" id="logo">
			<h2><a >Испытательная лаборатория</a></h2><br>
			<h3><a >ФБУ Новосибирский ЦСМ</a></h3>
		</div>



	  </nav>

		<div id="menu">
			<ul>
				<li ><a href="/" accesskey="1" title="">Главная</a></li>
				<li><a href="/zakaz" accesskey="2" title="">Заказчику</a></li>
				<li class="current_page_item"><a href="/info" accesskey="3" title="">О нас</a></li>
				<li><a href="/contacts" accesskey="4" title="">Контакты</a></li>
				@if (Auth::check())

				<li ><a href="/profile" accesskey="1" title=""  style="	 width:133px; 	padding: 0em 1.5em; padding-top:17px;  padding-bottom:3px; border: 2px solid #42aaff;">
			<div class="forimg" style="position:relative; bottom:6px;">
				<img src="../images/ava1.png" class="img2" width="30" height="" align="left" />
					<img src="../images/ava.png" class="image1" width="30" height="" align="left" style="margin-left:-33px;"  />
</div>
<?php
$d=Auth::user()->name;
$arr=explode(' ',$d);
echo $arr[1];
  ?>
				</a></li>
				@else
				<li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Личный кабинет</button>

<div id="id01" class="modal">

  <form class="modal-content animate" method="POST" action="{{ route('login') }}">

@csrf
    <div class="container7">
			<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right"><b>{{ __('E-mail') }}</b></label>

					<div class="col-md-6">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

							@error('email')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
							@enderror
					</div>
			</div><br>
			<div class="form-group row">
					<label for="password" class="col-md-4 col-form-label text-md-right"><b>{{ __('Пароль') }}</b></label>

					<div class="col-md-6">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

							@error('password')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
							@enderror
					</div>
			</div>





    </div>

		<div class="form-group row mb-0">
				<div class="col-md-8 offset-md-4">
						<button id="buttonenter" type="submit" class="buttonenter">
								{{ __('Войти') }}
						</button>
				</div>
		</div>
		<div class="col-md-6 offset-md-4">
				<div class="form-check">

						<label style="margin-left:15px; padding-top:5px;padding-bottom:5px;">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Запомнить меня') }}
						</label>

				</div>
		</div>

    <div id="container7" class="container7" style="background-color:#f1f1f1" align="left">
      <button id="button1" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Закрыть</button>
		<a href="/register">Регистрация</a>
			@if (Route::has('password.request'))
      <span class="psw">Забыли<a href="{{ route('password.request') }}">пароль?</a></span>
			@endif
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endif
</li>
		  </ul>
	</div>

  </div>
	<br>
	<div id="banner4" class="container2">
		<span>О нас</span>

	</div>
	<br>
	<!--<b align="center" style="font-size:30px;line-height:1; position:relative; left:17.55%;">Меню</b><br>

		<img src="images/razd.png" width="330" style="position:relative; left:17.55%; margin-bottom: 10px;" /><br>-->
    <main class="py-4">
        @yield('content')
    </main>


</div>

@extends('layouts.podval')
</body>
</html>

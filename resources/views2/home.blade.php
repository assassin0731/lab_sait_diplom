@extends('layouts.app')

@section('content')
<div id="banner7" style=" width: 1235px; ">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="poslereg">
                      <div style="font-weight:bold; font-size:20px; ">
                        Поздравляем!
                      </div>
                      Регистрация успешно завершена. Теперь Вы можете перейти в личный кабинет.
                    </div></br>
  <div id="container8" class="container8" align="center">
                    <a href="/profile">Перейти в личный кабинет</a>
<a href="{{ url('/logout') }}">Выход</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

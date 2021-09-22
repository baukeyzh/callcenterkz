@extends('user.app')
@section('content')
    <div class="section__tracking">
        <div class="block__tracking-block">
            <div class="wrap">
                <form action="{{route('info')}}" method="get">
                    <h3><label for="num">Введите номер HAWB:</label></h3>
                    @if(strlen($error_msg))
                        <h4 style="margin-top: 14px;margin-bottom: 0!important;"><label style="color:red" for="num">{{$error_msg}}</label></h4>
                    @endif
                    <input id="num" name="num" class="track-number-input" type="text" required>
                    <div class="block__content">
                        <p class="button">
                            <button id="track-btn" type="submit" class="btn track-btn">Отследить</button>
                        </p>
                    </div>
                    <div class="block__tracking-info-block">
                        <div id="track-loader" class="loader"></div>
                        <span id="tracking-info"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

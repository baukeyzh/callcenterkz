@extends('user.app')
@section('content')
    <div class="section__tracking">
        <div class="block__tracking-block">
            <div class="wrap">
                <form action="{{route('info')}}" method="get">
                    <h3><label for="num">Введите номер HAWB:</label></h3>
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

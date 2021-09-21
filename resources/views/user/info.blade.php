@extends('user.app')
@section('content')
    <div class="section__tracking">
        <div class="block__tracking-block" style="color: #000000; opacity: 1!important; z-index: 1;">

            <div class="container page-track">
                <form method="get" action="{{route('track_num')}}">
                    <input type="text" name="track_num" style="font-size: 18px;" value="{{$values->value2[0]->track_num}}" required>
                    <button type="submit" name="search"  style="font-size: 18px;" value="">Поиск</button>
                </form>
                <div class="starter-template">
                    <div class="title">
                        <h4 class="h2"><i class="glyphicon glyphicon-tag" style="font-size: 18px;"></i><strong style="font-size: 18px;">{{$values->value2[0]->track_num}}</strong></h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-right: 0px;padding-left: 0px;">
                            @if ($values->value1[0]->place_status_code == 'CARGOGIVE')
                                <div class="alert alert-success text-left">
                                    <strong>
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </strong>&nbsp;
                                    {{$values->value1[0]->place_status_name}}
                                </div>
                            @else
                                <div class="alert alert-info text-left">
                                    <strong><i
                                            class="glyphicon glyphicon-info-sign"></i></strong>{{$values->value1[0]->place_status_name}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row"
                         style="background-color: 	rgba(255,255,255,1)!important;z-index: 5!important;border-radius: 3px!important;">
                        <div class="col-md-8">
                            <div id="fragment-checkpoints">
                                <ul class="checkpoints">
                                    @foreach($values->value1 as $value)
                                        <li style="display: table; width:100%;table-layout: fixed;">
                                            <span class="datetime hidden-xs td"></span>
                                            @if($value->place_status_code == 'CARGOGIVE')
                                                <span class="td status down hidden-print">
                                                    <i class="icon delivered"></i>
                                                </span>
                                            @elseif($value->place_status_code == 'START')
                                                <span class="td status up hidden-print">
                                                    <i class="icon info-recieved"></i>
                                                </span>
                                            @else
                                                <span class="td status hidden-print">
                                                    <i class="icon"></i>
                                                </span>
                                            @endif
                                            <span class="td info status-iconed">
                                                <time class="datetime2">
                                                    <span>{{$value->date_status}}</span>
                                                </time>
                                            <strong class="checkpoint-status"
                                                    style="display: block">{{$value->place_status_name}}</strong>
                                            <em class="text-muted">&nbsp;</em>
                                        </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="primatic hidden-xs" data-place-slug="track-sidebar"></div>
                            <div class="extra">
                                <table class="table info-table">
                                    <tbody style="font-size: 14px">
                                    @if(strlen($values->value2[0]->track_num) > 0)
                                        <tr>
                                            <td>Трекинг</td>
                                            <td>{{$values->value2[0]->track_num}}</td>
                                        </tr>
                                    @endif
                                    @if(strlen($values->value2[0]->receiver_correspond_name) > 0)
                                        <tr>
                                            <td>Получатель</td>
                                            <td> {{$values->value2[0]->receiver_correspond_name}}</td>
                                        </tr>
                                    @endif
                                    @if(strlen($values->value2[0]->receiver_airport_name) > 0)
                                        <tr>
                                            <td>Аэропорт получателя</td>
                                            <td>{{$values->value2[0]->receiver_airport_name}}</td>
                                        </tr>
                                    @endif
                                    @if(strlen($values->value2[0]->receiver_airport_office_address) > 0)
                                        <tr>
                                            <td>Адрес офиса</td>
                                            <td>{{$values->value2[0]->receiver_airport_office_address}}</td>
                                        </tr>
                                    @endif
                                    @if(strlen($values->value2[0]->send_correspond_name) > 0)
                                        <tr>
                                            <td>Отправитель</td>
                                            <td>{{$values->value2[0]->send_correspond_name}}</td>
                                        </tr>
                                    @endif
                                    @if(strlen($values->value2[0]->sender_airport_name) > 0)
                                        <tr>
                                            <td>Аэропорт отправителя</td>
                                            <td>{{$values->value2[0]->sender_airport_name}}</td>
                                        </tr>
                                    @endif
                                    @if(strlen($values->value2[0]->sender_airport_office_address) > 0)
                                        <tr>
                                            <td>Адрес офиса</td>
                                            <td>{{$values->value2[0]->sender_airport_office_address}}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="history hidden-xs hidden-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

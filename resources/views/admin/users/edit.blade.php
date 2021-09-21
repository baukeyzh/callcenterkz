@extends('layouts.app')
@section('content')
    <div class="panel-default">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title"> Имя </label>
                    <input type="text" name="name" value="{{$user->name}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="text" name="email" value="{{$user->email}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="password"> Пароль </label>
                    <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="password"> Повторите пароль </label>
                    <input type="password" name="password_repeat"  class="form-control">
                </div>
                @if ($user->admin)
                    <div class="form-group">
                        <label> Вы являетесь администратором </label>
                    </div>
                @endif
                <div class="form-group">
                    <div class="tex-center">
                        <button class="btn btn-success" type="submit">
                            Сохранить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

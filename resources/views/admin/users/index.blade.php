@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Имя
                </th>
                <th>
                    Email
                </th>
                <th>
                    Изменть
                </th>
                <th>
                    Удалить
                </th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            <a href="{{ route('admin.user.edit',['id'=>$user->id])}}" class="btn btn-xs btn-info">
                                <span>Изменить</span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.user.delete',['id'=>$user->id])}}" class="btn btn-xs btn-danger">
                                <span class="">Удалить </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                    <tr>
                        <td colspan="4" style="text-align: center"><a href="{{ route('admin.user.create')}}">Добавить пользователя</a></td>
                    </tr>
                </tbody>
            </table>
            <div>
                {{ $users->links() }}
            </div>
        </div>
    </div>

@stop

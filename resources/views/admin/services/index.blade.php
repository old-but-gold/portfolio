@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Services</div>
                    <div class="panel-body">
                        <a type="button" class="btn btn-default" href="{{ route('services.create')}}">Добавить</a>
                        @if($services->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Description</th>
                                    <th>Действия</th>
                                </tr>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->name}}</td>
                                        <td>{{ $service->text }}</td>
                                        <td>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('services.edit', $service->id) }}">edit</a>
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            Пусто ... Может создать новую?
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

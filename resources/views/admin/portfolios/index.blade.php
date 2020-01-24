@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Portfolio/Works</div>
                    <div class="panel-body">
                        <a type="button" class="btn btn-default" href="{{ route('portfolios.create')}}">Добавить</a>
                        @if($portfolios->count() > 0)
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Text</th>
                                    <th>Description</th>
                                    <th>Действия</th>
                                </tr>
                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>{{ $portfolio->id }}</td>
                                        <td>{{ $portfolio->name}}</td>
                                        <td>{{ $portfolio->text }}</td>
                                        <td>{{ $portfolio->description }}</td>
                                        <td>
                                            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
                                                <a type="button" class="btn btn-default" href="{{ route('portfolios.edit', $portfolio->id) }}">edit</a>
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

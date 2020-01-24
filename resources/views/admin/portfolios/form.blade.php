@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(empty($entity))
                        <div class="panel-heading">Create new Example</div>
                    @else
                        <div class="panel-heading">Edit </div>
                    @endif
                    <div class="panel-body">
                        <form action="@if(empty($entity)){{ route('portfolios.store') }}@else{{ route('portfolios.update', $entity->id) }}@endif" method="POST">
                            {{ csrf_field() }}
                            @isset($entity)
                                {{ method_field('PUT') }}
                            @endisset
                            <div class="row">

                                @include('admin.fields.text', ['field' => 'name', 'name' => 'Название'])
                                @include('admin.fields.text', ['field' => 'text', 'name' => 'Подпись'])

                                <div class="form-group">
                                    {!! Form::label ('description', 'Описание:',['class'=>'col-xs-2 control-label' ]) !!}
                                    <div class="col-xs-8">
                                        {!! Form::textarea('description', old('description'), ['id'=>'editor', 'class'=>'form-control'] ) !!}
                                    </div>
                                </div>



                            </div>


                            <input type="submit" value="save">
                        </form>

                        @if(!empty($entity))

                                <form action="{{ route('portfolios.update', $entity->id )}}" method="put" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="file" name="images">
                                    </div>
                                    <button class="btn btn-default" type = "submit">load</button>
                                </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
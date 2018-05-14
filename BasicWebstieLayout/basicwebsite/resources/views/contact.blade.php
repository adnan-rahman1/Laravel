@extends("layout.master")

@section("content")
<h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Names') }}
            {{ Form::text('name', '', [ 'class' => 'form-control', 'placeholder' => 'enter name', 'required' ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', '', [ 'class' => 'form-control', 'placeholder' => 'enter email', 'required' ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('message', 'Message') }}
            {{ Form::textArea('message', '', [ 'class' => 'form-control', 'placeholder' => 'enter message' ]) }}
        </div>
        <div>
            {{ Form::submit('Submit', ['class' => 'btn btn-info' ]) }}
        </div>
    {!! Form::close() !!}
@endsection
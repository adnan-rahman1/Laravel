@extends("layout.master")

@section("content")
<h1>Message</h1>
    @if(count($messages) > 0)
        @foreach ($messages as $msg)
            <ul class="list-group-item">
                <li class="list-group">Name: {{ $msg->name }}</li>
                <li class="list-group">Email: {{$msg->email }}</li>
                <li class="list-group">Messages: {{$msg->messages }}</li>
            </ul>
        @endforeach
    @endif
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @csrf
                <h1>{{ $details['email'] }}</h1>
                <h1>{{ $details['title'] }}</h1>
                <p>{{ $details['body'] }}</p>
                <a href='http:/homestead.test/confirmAuth/{{ $details["id"] }}'>인증</a>
            </div>
        </div>
    </div>
</div>
@endsection

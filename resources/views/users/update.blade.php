@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update board</div>
                    <div>
                        <h2>title</h2>
                        <div>
                            <h2>email</h2>
                            {{ $user_select->email }}
                            <h2>title</h2>
                            {{ $board->title }}
                        </div>
                    </div>
                    <form action='/board/update/{{ $board->id }}' method="POST">
                        @method('PUT')
                        @csrf
                        <h2>title</h2>
                        <input type="text" name="title">
                        <button type="submit">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

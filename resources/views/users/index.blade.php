@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">board</div>
                    <div>
                        <h2>title</h2>
                        <div>
                            @foreach ($boards as $board)
                                {{ $board->title }}
                            @endforeach
                        </div>
                    </div>
                    <form action= {{ route('board.create') }} method="POST">
                        @csrf
                        <h2>user_id</h2>
                        <input type="number" name="user_id">
                        <h2>title</h2>
                        <input type="text" name="title">
                        <button type="submit">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

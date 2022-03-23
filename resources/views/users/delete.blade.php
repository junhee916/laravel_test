@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">delete board</div>
                    <form action='/board/delete/{{ $user_select->id }}' method="POST">
                        @csrf
                        <button type="submit">delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

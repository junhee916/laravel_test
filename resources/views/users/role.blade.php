@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role</div>
                    @if ($checkUser->role == '브론즈')
                        <div>브론즈</div>
                        @elseif ($checkUser->role == '실버')
                        <div>실버</div>
                        @elseif ($checkUser->role == '골드')
                        <div>골드</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

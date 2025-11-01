@extends('admin.maindesign')

@section('title', 'Admin Dashboard')

@section('page_title', 'Admin Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Welcome, Admin!</h4>
                <p>{{ __("You're logged in!") }}</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="section-heading text-warning">You're Lost</h1>
        <p class="lead section-lead">Please return to the
        {{ link_to_route('home', 'home page', null, null) }}.</p>
    </div>
@stop
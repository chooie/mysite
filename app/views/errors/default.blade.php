@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="section-heading text-warning">Something Terrible Happened</h1>
        <p class="lead section-lead">No idea what happend. Please return to the
        {{ link_to_route('home', 'home page', null, null) }}.</p>
    </div>
@stop
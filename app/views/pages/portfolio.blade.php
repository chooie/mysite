@extends('layouts.default')

@section('head')
  <title>Portfolio</title>
@stop

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="section-heading">Clock.js</h1>

        <p class="lead section-lead">
          A library for drawing simple clock animations with the canvas element.
        </p>

        <p class="lead section-lead">
          See the <a href="http://chooie.github.io/clock.js/" target="_blank">demo</a>.
        </p>

        <p class="lead section-lead">
          Check out the source code <a href="https://github.com/chooie/clock.js">here</a>.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h1 class="section-heading">E-Commerce Site</h1>

        <p class="lead section-lead"> A group university assignment. I was responsible for
          all of the backend and was also a key member and mentor for the frontend. The application
          is obviously not functional as a fully-fledged e-commerce site but it was a great learning
          experience.</p>

        <p class="lead section-lead">
          You can find it <a href="http://shop.charliehebert.com" target="_blank">here</a>.
        </p>

        <p class="lead section-lead">
          Check out the source code <a href="https://github.com/chooie/shop">here</a>.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h1 class="section-heading">This Site</h1>

        <p class="lead section-lead"> The site you're on now!</p>

        <p class="lead section-lead">
          Check out the source code <a href="https://github.com/chooie/mysite">here</a>.
        </p>
      </div>
    </div>
  </div>
@stop
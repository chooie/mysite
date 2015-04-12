@extends('layouts.default')

@section('head')
  <title>Charlie Hebert</title>
@stop

@section('content')

  {{-- Content Section --}}
  <div class="container">
    <div class="row">
      <div class="col-md-8 center-block center-row">
        <section>
          <h1 class="section-heading">Hi, I'm Charlie.</h1>

          <p class="lead section-lead">I'm a 3rd year Computer Science and Business student
            at Trinity College Dublin. I am particularly interested in <b>
              web development</b> and <b>entrepreneurship</b>.
            I'm currently working on improving my skills in these areas as much as possible,
            in addition to my studies.</p>

          <p class="lead section-lead">The purpose of this site is to keep a record of what I've
            been up to and what I'm currently working on.</p>
        </section>

        {{-- Content Section --}}
        <section>
          <h1 class="section-heading">What can I do?</h1>

          <div class="row">
            <div class="col-sm-6">
              <h2 class="sub-heading">Strong</h2>

              <h3>Web Dev</h3>
              <ul>
                <li>HTML5 & CSS3</li>
                <li>Javascript</li>
                <li>PHP (Laravel Framework)</li>
              </ul>
              <h3>Core</h3>
              <ul>
                <li>OOP</li>
                <li>Database Design</li>
                <li>Package Management</li>
              </ul>
              <h3>Tools</h3>
              <ul>
                <li>Shell</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <h2 class="sub-heading">Proficient</h2>

              <h3>Web Dev</h3>
              <ul>
                <li>SQL - MySQL (and other relational databases)</li>
              </ul>
              <h3>Enterprise</h3>
              <ul>
                <li>Java</li>
                <li>C</li>
              </ul>
              <h3>Core</h3>
              <ul>
                <li>Algorithms and Data Structures</li>
              </ul>
              <h3>Tools</h3>
              <ul>
                <li>Git</li>
                <li>PHPStorm</li>
                <li>Vagrant (with Laravel Homestead)</li>
                <li>Composer</li>
                <li>MAMP</li>
                <li>Eclipse</li>
                <li>Sequel Pro</li>
                <li>Atom</li>
              </ul>
            </div>
          </div>
        </section>

        {{-- Content Section --}}
        <section>
          <h1 class="section-heading">What am I working on?</h1>

          <h2>Javascript</h2>

          <p>Currently working through a <a
              href="http://www.amazon.co.uk/Professional-JavaScript-Developers-Wrox-Guides/dp/1118026691"
              target="_blank">
              great resource</a> that covers Javascript at an advanced level. Once complete,
            I hope to get stuck into Node and eventually Meteor.</p>

          <h2>Back-End Development</h2>
          <ul>
            <li>Absorbing all things Laravel. <a href="https://laracasts.com/" target="blank">
                Laracasts </a> is a fantastic resource.
            </li>
            <li>Scouring the internet for interesting packages.</li>
            <li>Working on improving my OOP. Currently going through
              <a href="http://www.poodr.com/" target="_blank">this</a> fantastic book.
            </li>
          </ul>
        </section>
      </div>
    </div>
  </div>
@stop

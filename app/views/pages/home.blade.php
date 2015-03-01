@extends('layouts.default')

@section('head')
  <title>Charlie Hebert</title>

  {{ HTML::style("css/particles.css") }}
@stop

@section('content')

  {{-- Content Section --}}
  <div class="container">
    <div class="center-block">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 center-block center-row">
              <h1 class="section-heading">Hi, I'm Charlie.</h1>

              <p class="lead section-lead">I'm a 3rd year Computer Science and Business student
                at Trinity College Dublin. I am particularly interested in <b>
                  web development</b> and <b>entrepreneurship</b>.
                I'm currently working on improving my skills in these areas as much as possible,
                in addition to my studies.</p>

              <p class="lead section-lead">The purpose of this site is to keep a record of what I've
                been up to and what I'm currently working on.</p>
            </div>
          </div>
        </div>
      </section>

      {{-- Content Section --}}
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 center-block center-row">
              <h1 class="section-heading">What can I do?</h1>

              <div class="col-lg-6 text-info">
                <h3>Strong</h3>
                <ul>
                  <li>Web Dev</li>
                  <ul>
                    <li>HTML5 & CSS3</li>
                    <li>Javascript</li>
                    <li>PHP (Laravel Framework)</li>
                  </ul>
                  <li>Core</li>
                  <ul>
                    <li>OOP</li>
                    <li>Database Design</li>
                    <li>Package Management</li>
                  </ul>
                  <li>Tools</li>
                  <ul>
                    <li>Shell</li>
                  </ul>
                </ul>
              </div>
              <div class="col-lg-6 text-warning">
                <h3>Proficient</h3>
                <ul>
                  <li>Web Dev</li>
                  <ul>
                    <li>SQL - MySQL (and other relational databases)</li>
                  </ul>
                  <li>Enterprise</li>
                  <ul>
                    <li>Java</li>
                    <li>C</li>
                  </ul>
                  <li>Core</li>
                  <ul>
                    <li>Algorithms and Data Structures</li>
                  </ul>
                  <li>Tools</li>
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
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 center-block center-row">
              <div id="particles-js"></div>
            </div>
          </div>
        </div>
      </section>

      {{-- Content Section --}}
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 center-block center-row">
              <h1 class="section-heading">What am I working on?</h1>
              <ul>
                <li>Javascript</li>
                <ul>
                  <p>Currently working through a <a
                      href="http://www.amazon.co.uk/Professional-JavaScript-Developers-Wrox-Guides/dp/1118026691"
                      target="_blank">
                      great resource</a> that covers Javascript at an advanced level. Once complete,
                    I hope to get stuck into Node and eventually Meteor.</p>
                </ul>

                <li>Back-End Development</li>
                <ul>
                  <li>Absorbing all things Laravel. <a href="https://laracasts.com/" target="blank">
                      Laracasts </a> is a fantastic resource.
                  </li>
                  <li>Scouring the internet for interesting packages.</li>
                  <li>Working on improving my OOP. Currently going through
                    <a href="http://www.poodr.com/" target="_blank">this</a> fantastic book.
                  </li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@stop

@section('scripts')
  <script src="js/particles.min.js"></script>
  <script>
    particlesJS('particles-js', {
      particles: {
        color: '#CFD8DC',
        color_random: false,
        shape: 'circle', // "circle", "edge" or "triangle"
        opacity: {
          opacity: 1,
          anim: {
            enable: false,
            speed: 0.5,
            opacity_min: 0,
            sync: false
          }
        },
        size: 1.5,
        size_random: true,
        nb: 20,
        line_linked: {
          enable_auto: true,
          distance: 140,
          color: '#CFD8DC',
          opacity: 1,
          width: 1,
          condensed_mode: {
            enable: false,
            rotateX: 600,
            rotateY: 600
          }
        },
        anim: {
          enable: true,
          speed: 1
        }
      },
      interactivity: {
        enable: true,
        mouse: {
          distance: 250
        },
        detect_on: 'canvas', // "canvas" or "window"
        mode: 'grab', // "grab" of false
        line_linked: {
          opacity: .5
        },
        events: {
          onclick: {
            enable: true,
            mode: 'push', // "push" or "remove"
            nb: 1
          },
          onresize: {
            enable: true,
            mode: 'out', // "out" or "bounce"
            density_auto: false,
            density_area: 800
          }
        }
      },
      /* Retina Display Support */
      retina_detect: true
    });
  </script>
@stop

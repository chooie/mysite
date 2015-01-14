@extends('layouts.default')

@section('head')
    <title>Charlie Hebert</title>
@stop

@section('content')

    {{-- Content Section --}}
<div class="container">
    <div class="center-block">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
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
                    <div class="col-lg-12">
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

        {{-- Content Section --}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">What am I working on?</h1>
                        <ul>
                            <li>Javascript</li>
                            <ul>
                                <p>Currently working through a <a href="http://amzn.to/1C6Uf4S" target="_blank">
                                great resource</a> that covers Javascript at an advanced level. Once complete,
                                I hope to get stuck into Node and eventually Meteor.</p>
                            </ul>

                            <li>Back-End Development</li>
                            <ul>
                                <li>Absorbing all things Laravel. <a href="https://laracasts.com/" target="blank">
                                Laracasts </a> is a fantastic resource.</li>
                                <li>Scouring the internet for interesting packages.</li>
                                <li>Working on improving my OOP. Currently going through
                                <a href="http://www.poodr.com/" target="_blank">this</a> great resource.</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop
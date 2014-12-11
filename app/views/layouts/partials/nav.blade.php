<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        {{-- Brand and toggle get grouped for better mobile display --}}
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'Home', null, ['class' => 'navbar-brand']) }}
        </div>
        {{-- Collect the nav links, forms, and other content for toggling --}}
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    {{ link_to_route('portfolio', 'Portfolio', null, null) }}
                </li>
                <li>
                    {{ link_to_route('blog', 'Blog', null, null) }}
                </li>
                <li>
                    {{ link_to_route('contact', 'Contact', null, null) }}
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="btn btn-social-icon btn-facebook social-icons" href="https://www.facebook.com/Chewy223">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a class="btn btn-social-icon btn-twitter social-icons" href="https://twitter.com/CharlieHebert92">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </li>
                <li>
                    <a class="btn btn-social-icon btn-github social-icons" href="https://github.com/chooie">
                        <i class="fa fa-github-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
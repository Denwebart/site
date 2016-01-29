<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Заголовок</title>
    {{--<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/uikit.min.css') }}">
</head>

<body>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

    <nav class="uk-navbar uk-margin-large-bottom">
        <a class="uk-navbar-brand uk-hidden-small" href="layouts_frontpage.html">Brand</a>
        <ul class="uk-navbar-nav uk-hidden-small">
            <li class="uk-active">
                <a href="layouts_frontpage.html">Frontpage</a>
            </li>
            <li>
                <a href="layouts_portfolio.html">Portfolio</a>
            </li>
            <li>
                <a href="layouts_blog.html">Blog</a>
            </li>
            <li>
                <a href="layouts_documentation.html">Documentation</a>
            </li>
            <li>
                <a href="layouts_contact.html">Contact</a>
            </li>
            <li>
                <a href="layouts_login.html">Login</a>
            </li>
        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
    </nav>

    @yield('content')

</div>

<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas">
            <li class="uk-active">
                <a href="layouts_frontpage.html">Frontpage</a>
            </li>
            <li>
                <a href="layouts_portfolio.html">Portfolio</a>
            </li>
            <li>
                <a href="layouts_blog.html">Blog</a>
            </li>
            <li>
                <a href="layouts_documentation.html">Documentation</a>
            </li>
            <li>
                <a href="layouts_contact.html">Contact</a>
            </li>
            <li>
                <a href="layouts_login.html">Login</a>
            </li>
        </ul>
    </div>
</div>

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/uikit.min.js') }}"></script>
</body>
</html>
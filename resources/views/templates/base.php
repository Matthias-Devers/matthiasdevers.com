<!-- Thank's for checking out my website. Everything on this site is pretty much done by me. -->

<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="{{ robots }}">
        <title>{{ title }}</title>
        <meta name="description" content="{{ description }}">
        <meta name="author" content="{{ author }}">

        <meta property="og:title" content="{{ title }}">
        <meta property="og:description" content="{{ description }}">
        <meta property="og:url" content="{{ url }}">
        <meta property="og:locale" content="en_US">
        <meta property="og:image" content="{{ image }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ name }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url }}">
        <meta name="twitter:title" content="{{ title }}">
        <meta name="twitter:description" content="{{ description }}">
        <meta name="twitter:image" content="{{ image }}">

        <link rel="apple-touch-icon" sizes="180x180" href="">
        <link rel="icon" type="image/png" sizes="32x32" href="">
        <link rel="icon" type="image/png" sizes="16x16" href="">
        <link rel="manifest" href="" crossorigin="use-credentials">
        <link rel="mask-icon" href="" color="">
        <meta name="apple-mobile-web-app-title" content="">
        <meta name="application-name" content="">
        <meta name="msapplication-TileColor" content="">
        <meta name="msapplication-TileImage" content="">

        <script src="/javascript/jquery-3.7.1min.js" type="text/javascript" defer></script>
        <script src="/javascript/main.min.js" type="text/javascript" defer></script>

        <link rel="stylesheet" type="text/css" href="/css/style.min.css">

    </head>

    <body>

        <!-- Header -->
        {{ include('/templates/header.php') }}

        <!-- Main -->
        <main id="main">
            {% block main %}{% endblock %}
        </main>

        <!-- Footer -->
        {{ include('/templates/footer.php') }}

    </body>

</html>
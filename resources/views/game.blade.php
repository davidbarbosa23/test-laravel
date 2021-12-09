<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tic tac toe</title>

    <script src="{{ mix('/js/app.js') }}" async></script>
</head>

<body>
    <noscript>
        <strong>We're sorry but this app doesn't work properly without JavaScript enabled. Please enable it to
            continue.</strong>
    </noscript>
    <div id="app">
        <example-component>

        </example-component>
    </div>
</body>

</html>

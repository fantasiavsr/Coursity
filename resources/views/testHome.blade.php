<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel React Example</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="{{ asset('js/App.js') }}" type="module"></script>
</head>

<body>
    <div id="root"></div>

    <script>
        window.page = "testHome";
        window.datatop = @json($datatop);
    </script>

    <script src="{{ asset('js/App.js') }}" type="module"></script>
</body>

</html>

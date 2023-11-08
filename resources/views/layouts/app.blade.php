<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .block {
            height: 25vh;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .block:hover {
            transform: scale(1.05);
        }
    </style>
    <livewire:styles />
</head>
<body>
@livewire('main-menu')
{{ $slot }}
<livewire:scripts />

</body>
</html>

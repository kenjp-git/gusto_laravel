<!--2024/05/04/09:56 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gusto</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <app/>
    </div>
</body>
</html>
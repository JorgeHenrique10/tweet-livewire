<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Livewire</title>

    @livewireStyles
</head>

<body>

    <div class="containner">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>

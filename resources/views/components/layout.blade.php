<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoГo</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <header>
        <a href="/"><img src="{{ asset('logo.svg') }}" alt="" class="logo"></a>
        <a href="/profile" class="profile">profile</a>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>

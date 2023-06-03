<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum Penelitian</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="relative h-screen w-full overflow-hidden">
        @include('user-home-page.header')
        <div class="w-full h-full pt-16 px-4 md:px-2 lg:px-6 bg-slate-100 flex flex-row gap-2 lg:gap-6">
            @include('user-home-page.left-side')
            @include('user-home-page.main.index')
            @include('user-home-page.right-side')
        </div>
    </div>
</body>
</html>

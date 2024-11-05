<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixels</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body class="text-white bg-black pb-20 font-hanken-grotes">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b border-white/10">
            <div>
                <a href="/">
                    <img width="70px" src="{{ Vite::asset('resources/images/3.webp') }}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salleries</a>
                <a href="">Companies</a>
            </div>
            <div class="flex">
            @guest
            <div class="mr-4"><a href="/login">log In</a></div>
            <div><a href="/register">Sign Up</a></div>
            @endguest
            @auth
            <div class="mr-4"><a href="/jobs/create">Post a Job</a></div>
            <form action="/logout" method="POST">
            @csrf
            @method('delete')
            <div><button type="submit">Logout</button></div>
            </form>
            @endauth
        </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto ">
            {{ $slot }}
        </main>
    </div>
</body>

</html>

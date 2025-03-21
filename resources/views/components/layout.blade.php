<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
            rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-custom-black text-white font-custom pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <Img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/jobs">Jobs</a>
                <a href="/careers">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>
            @auth
                <div>
                    <a href="/jobs/create">Post a Job</a>
                </div>
            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Log In</a>
                    <a href="/register">Register</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
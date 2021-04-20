<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MZi</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="antialiased">
    <div class="relative mx-auto text-gray-800 max-w-7xl">
        {{-- HEADER --}}
        <x-header />
        {{-- ABOUT --}}
        @yield('content')

        {{-- FOOTER --}}
        <div class="h-40 bg-gray-100">
            <div class="px-5 py-5">
                <form action="POST">
                    <h2 class="px-1 py-2 font-semibold text-gray-600">Subscribe to my newsletter</h2>
                    <input class="rounded-lg" type="email" id="email" name="email"
                        placeholder="Enter your Email adress">
                    <button type="submit" class="p-2 border border-black rounded">Go</button>
                </form>
            </div>
        </div>
        {{-- END FOOTER --}}
    </div>
</body>

</html>

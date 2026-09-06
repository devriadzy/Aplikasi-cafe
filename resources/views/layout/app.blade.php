<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Laravel App')
    </title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #080b18;
            color: #ffffff;
        }

        a {
            text-decoration: none;
        }

        /* GLOBAL BUTTON */

        .primary-btn {
            display: inline-block;
            background: #6c63ff;
            padding: 14px 25px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            transition: 0.3s;
        }

        .primary-btn:hover {
            background: #8179ff;
            transform: translateY(-3px);
        }

        .secondary-btn {
            display: inline-block;
            padding: 14px 25px;
            border-radius: 10px;
            border: 1px solid #292e45;
            color: #ffffff;
            font-weight: 600;
            transition: 0.3s;
        }

        .secondary-btn:hover {
            background: #11162a;
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @stack('scripts')

</body>

</html>
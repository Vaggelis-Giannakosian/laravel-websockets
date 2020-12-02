<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="antialiased font-sans">
<div id="app">

    <div class="container mx-auto">

        <header class="py-6">
            <h1 class="font-bold text-xl"> Vue SPA </h1>
        </header>

        <main class="flex">

            <aside class="w-1/5">

                <section class="mb-8">
                    <h5 class="uppercase font-bold">The Brand</h5>
                    <ul>
                        <li>
                            <router-link to="/">Home</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name : 'about'}">About</router-link>
                        </li>
                    </ul>
                </section>

                <section>
                    <h5 class="uppercase font-bold">Doodles</h5>
                    <ul>
                        <li>
                            <router-link to="/">Home</router-link>
                        </li>
                        <li>
                            <router-link :to="{ name : 'about'}">About</router-link>
                        </li>
                    </ul>
                </section>


            </aside>

            <div class="primary flex-1">
                <router-view></router-view>
            </div>

        </main>

    </div>


</div>

<script src="{{ mix('js/app.js') }}"></script>
<script>
    Echo.channel('home').listen('NewMessage', e => {
        console.log(e)
    })
</script>
</body>
</html>

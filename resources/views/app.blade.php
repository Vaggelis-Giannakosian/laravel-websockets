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

        <header class="py-6 mb-8">
            <h1 class="font-bold text-2xl"> Vue SPA </h1>
        </header>

        <main class="flex">

            <aside class="w-1/5">

                <section class="mb-8">
                    <h5 class="uppercase font-bold mb-3">The Brand</h5>
                    <ul>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/">Logo</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" :to="{ name : 'about'}">Logo Symbol</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" :to="{ name : 'about'}">Colors</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" :to="{ name : 'about'}">Typography</router-link>
                        </li>
                    </ul>
                </section>

                <section>
                    <h5 class="uppercase font-bold mb-3">Doodles</h5>
                    <ul>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/">Mascot</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" :to="{ name : 'about'}">Illustrations</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/">Loaders</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" :to="{ name : 'about'}">Animations</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" :to="{ name : 'about'}">Wallpapers</router-link>
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

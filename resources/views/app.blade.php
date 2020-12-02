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

    <header class="py-6 px-8 mb-8">
        <h1 class="font-bold text-2xl"> Vue SPA </h1>
    </header>

    <div class="container px-8">

        <main class="flex">

            <aside class="w-1/5 pt-8">

                <section class="mb-10">
                    <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                    <ul>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/" exact>Logo</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/logo_symbol">Logo Symbol</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/colors">Colors</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/typography">Typography</router-link>
                        </li>
                    </ul>
                </section>

                <section>
                    <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                    <ul>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/mascot">Mascot</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/illustrations">Illustrations</router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/loaders-animations">Loaders and Animations
                            </router-link>
                        </li>
                        <li class="text-sm pb-4">
                            <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
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

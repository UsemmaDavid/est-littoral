<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/E.png') }}"/>
    <title>Est-Littoral</title>

    <!-- Fonts -->


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="">
        <div class=" min-h-screen  selection:bg-[#2081ff] selection:text-white">
            <div class=" w-full">
                <header
                    class="flex items-center justify-between border-solid border-b-2 border-blue-300 shadow-lg bg-gradient-to-r from-blue-100 to-blue-300 ">
                    <div class="">
                        <img src="{{ asset('images/logo.png') }}" height="100" width="300">
                    </div>
                    <nav class="">
                        <div class="ml-10 flex items-baseline space-x-2">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav.nav-link href="/" :active="request()->is('/')">Accueil</x-nav.nav-link>
                            <x-nav.nav-link href="{{route('ecole')}}"
                                :active="Str::startsWith(request()->route()->getName(), 'ecole') ">L'Ecole</x-nav.nav-link>
                            <x-nav.nav-link href="{{route('formations')}}"
                                :active="Str::startsWith(request()->route()->getName(), 'formations')">Les
                                Formations</x-nav.nav-link>
                            <x-nav.nav-link href="{{route('quisommesnous')}}"
                                :active="Str::startsWith(request()->route()->getName(), 'quisommesnous')">Qui sommes nous
                                ?</x-nav.nav-link>
                            <x-nav.nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav.nav-link>
                        </div>
                    </nav>
                </header>

                <main class="">
                    <div class="flex justify-center items-center  p-5 bg-blue-50">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/banniere-4.jpg') }}" class="rounded-lg">
                        </div>
                    </div>

                    <div class="my-10 flex items-center justify-center">
                        <div class="w-1/12"></div>
                        <div class="w-5/6">
                        {{ $slot }}
                        </div>
                        <div class="w-1/12"></div>
                    </div>


                </main>

                <footer
                    class="mt-10 py-10 text-center text-sm text-black dark:text-white/70 bg-gradient-to-r from-blue-100 to-blue-300">
                    <p class="mt-4 text-sm/relaxed">
                        <strong>Est-Littoral - Ecole Supérieur de Technologie du Littoral.</strong>
                        <br>Etablissement privé d'enseignement supérieur situé à Pointe-Noire au Congo.
                    </p>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/E.png') }}"/>
    <title>Est-Littoral</title>

    <!-- Fonts -->


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-50 dark:bg-black dark:text-white">
<header class="sticky top-0 z-30 bg-teal-700 text-white">
    <section class="mx-auto  flex w-full items-center justify-between px-4 py-2">
      <div>
      <h1 class="text-3xl font-medium">
        <a href="/">🧩 Est-Littoral</a>
      </h1>
      <h2 class="ml-[52px] font-semibold">Former l'Homme avec grand H</h2>
      </div>
      
      <div class=" ">
        <button id="hamburger-button" class="relative h-8 w-8 cursor-pointer text-3xl md:hidden">
          <!-- &#9776; -->
          <div
            class="absolute top-4 -mt-0.5 h-1 w-8 rounded bg-white transition-all duration-500 before:absolute before:h-1 before:w-8 before:-translate-x-4 before:-translate-y-3 before:rounded before:bg-white before:transition-all before:duration-500 before:content-[''] after:absolute after:h-1 after:w-8 after:-translate-x-4 after:translate-y-3 after:rounded after:bg-white after:transition-all after:duration-500 after:content-['']">
          </div>
        </button>
        <nav class="hidden space-x-8 text-xl md:block" aria-label="main">
          <a href="/" class="hover:opacity-90">Accueil</a>
          <a href="{{route('ecole')}}" class="hover:opacity-90">Ecole</a>
          <a href="{{route('formations')}}" class="hover:opacity-90">Formations</a>
          <a href="{{route('programmes')}}" class="hover:opacity-90">Programmes</a>
          <a href="/contact" class="hover:opacity-90">Contact</a>
        </nav>
      </div>
    </section>
    <section id="mobile-menu"
      class="top-68 justify-center absolute hidden w-full origin-top animate-open-menu flex-col bg-black text-5xl">
      <!-- <button class="text-8xl self-end px-6">
                &times;
            </button> -->
      <nav class="flex min-h-screen flex-col items-center py-8" aria-label="mobile">
        <a href="/" class="w-full py-6 text-center hover:opacity-90">Accueil</a>
        <a href="{{route('ecole')}}" class="w-full py-6 text-center hover:opacity-90">Ecole</a>
        <a href="{{route('formations')}}" class="w-full py-6 text-center hover:opacity-90">Formations</a>
        <a href="{{route('programmes')}}" class="w-full py-6 text-center hover:opacity-90">Programmes</a>
        <a href="/contact" class="w-full py-6 text-center hover:opacity-90">Contact</a>
      </nav>
    </section>
  </header>
  <main class="mx-auto w-full ">
    <section id="accueil"
        class="bg-blue-100 dark:bg-black mb-12 flex scroll-mt-40 flex-col-reverse items-center justify-center py-10 px-5 lg:flex-row lg:px-20 ">
        <article class="lg:w-1/3">
          <h2 class="max-w-lg text-center text-4xl font-bold text-slate-900 dark:text-white lg:text-left lg:text-5xl">
            Ecole Supérieure <br> de Technologie <br> du littoral <br> Pointe-Noire
          </h2>
          <p class="mt-4 max-w-md text-center text-2xl font-bold text-slate-700 dark:text-slate-400 lg:text-left">
              <span class="text-blue-700 dark:text-indigo-300">Télécommunications & Réseaux<br>Systèmes Industriels<br>Environnement, Hygiène<br> & Sécurité<br>Management des activités <br> maritimes</span>
          </p>
        </article>
        <x-banner.main />
     </section>
    <!-- <section id="content" class="widescreen:section-min-height tallscreen:section-min-height mb-12 flex scroll-mt-40 flex-col-reverse items-center justify-center py-10 px-5 md:flex-row md:px-20 "> -->
    <section id="content" class="widescreen:section-min-height tallscreen:section-min-height mb-12 scroll-mt-40 items-center justify-center py-10 px-5 md:px-20 ">
    {{ $slot }}
    </section>
    </main>

    <footer id="footer" class="bg-teal-700 text-xl text-white">
    <section class="mx-auto flex max-w-4xl flex-col p-4 sm:flex-row sm:justify-between">
      <address>
        <h2>Ecole Supérieure de Technologie du Littoral</h2>
        Chambre de Commerce<br />
        B.P. : 8101 Pointe-Noire<br />
        République du Congo<br />
        Email:
        <a href="mailto:est-littoral2000@gmail.com">est-littoral2000@gmail.com</a><br />
        Phone: <a href="tel:+242066653021"> 00 242 06 665 30 21</a>
      </address>
      <nav class="hidden flex-col gap-2 md:flex" aria-label="footer">
      <a href="/" class="hover:opacity-90">Accueil</a>
          <a href="{{route('ecole')}}" class="hover:opacity-90">Ecole</a>
          <a href="{{route('formations')}}" class="hover:opacity-90">Formations</a>
          <a href="{{route('programmes')}}" class="hover:opacity-90">Programmes</a>
          <a href="/contact" class="hover:opacity-90">Contact</a>
      </nav>
      <div class="flex flex-col sm:gap-2">
        <p class="text-right">Copyright &copy; <span id="year">2025</span></p>
        <p class="text-right">All Rights Reserved</p>
      </div>
    </section>
  </footer>
</body>

</html>
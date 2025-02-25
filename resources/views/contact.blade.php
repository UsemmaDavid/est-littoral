<x-layout>
    <div class="grid w-full gap-6 lg:grid-cols-2 lg:gap-8">
        <div class="flex flex-col items-start">

            <div class="">
                <img src="{{ asset('images/ChambreCommerce.jpg') }}" class="rounded-lg">
            </div>

        </div>
        <div class="flex flex-col items-start">
            <article
                class="w-full overflow-hidden rounded-lg text-justify bg-blue-200 dark:bg-gray-800 dark:hover:text-white/70 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3">
                <address>
                    <h2 class="text-xl font-bold">Nous contacter </h2>
                    <br>Lycée Victor Augagneur,
                    <br>Chambre de Commerce, d’Industrie, d’Agriculture et de l’Artisanat
                    <br>B.P. : 8101 Pointe-Noire, République du Congo
                    <br>
                    <ul class="mt-2 mb-4 list-image-[url('../../public/images/mobile.png')] list-inside">
                        <h3 class=" font-bold">Contact téléphonique </h3>
                        <li><a href="tel:+242066620572">Promoteur</a></li>
                        <li><a href="tel:+242066652031">Administrateur Général</a></li>
                        <li><a href="tel:+242066601521">Chef de la Scolarité</a></li>
                        <li><a href="tel:+242066698716">Sécrétaire de direction</a></li>
                        <li><a href="tel:+242066685888">Gestionnaire</a></li>
                    </ul>
                    <a href="mailto:est-littoral2000@gmail.com"><div class="flex items-end space-x-2"><img src="images/mail.png"> <span class="font-bold">Contacter par mail</span></div></a><br />
                </address>
            </article>
            @if(session('success'))
                <div class="bg-green-300 font-bold text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
            <div class="bg-red-300 font-bold text-sm">
                    <ul class="my-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="mt-4 w-full overflow-hidden rounded-lg bg-blue-200 dark:bg-gray-800 dark:hover:text-white/70 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3" action="{{ route('postmessage') }}" method="post">
                @csrf
                <fieldset> <legend class="text-xl font-bold">Formulaire de contact</legend>
                    <p>
                        <label class="block mb-1 font-medium text-gray-900 dark:text-white" for="name">Nom </label>
                        <input class="block p-2.5 w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="name" id="name" placeholder="Votre Nom" required>
                    </p>
                    <p>
                        <label class="block mb-1 font-medium text-gray-900 dark:text-white" for="email">Mail</label>
                        <input class="block p-2.5 w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" name="email" id="email" placeholder="Votre Email" required>
                    </p>
                    <p>
                        <label class="block mb-1 font-medium text-gray-900 dark:text-white" for="message">Message</label>
                    </p>
                        <textarea class="block p-2.5 w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="4" name="message" id="message" placeholder="Votre Message" required></textarea>
                </fieldset>
                <div class="flex justify-end">
                    
                    <button class ="p-2 mr-2 rounded-lg bg-teal-700 text-white text-sm font-semibold" type="submit">Envoyer</button>
                </div>
            </form>

        </div>

    </div>


</x-layout>
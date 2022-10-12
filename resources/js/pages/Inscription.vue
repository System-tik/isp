<template class="mt-10">
    <div class="flex flex-col items-center justify-center w-full py-6 mt-20" style="background-color:#f4f6ff;">
        <div class="">
            <span class="text-sm">
                <router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / Inscription</span>
            </span>
        </div>
        <div class="mt-3">
            <h1 class="text-3xl font-bold text-gray-900">Inscription</h1>
        </div>
    </div>

    <!-- Modalites -->
    <div class="px-4 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80">
        <div class="grid grid-cols-6 text-gray-800">
            <div class="col-span-6 text-sm text-justify lg:col-span-4 py-7">
                <h1 class="mb-4 font-serif text-2xl text-blue-900">Les modalites d'admission</h1>
                <div class="px-4">
                    <p>
                        <span>A.</span><span class="px-2">Formulaire : 10$</span>
                    </p>
                    <p class="py-2">
                        <span>B.</span><span class="px-2">Si moins de 60% aux EXETATS,
                            test d’admission : 10$ (à payer le jour du test) – L1 uniquement.
                            Matière : Français, Mathématique, Culture Générale, Anglais</span>
                    </p>
                    <p class="py-2">
                        <span>C.</span><span class="px-2">Confirmation d’inscription
                            -25$ des frais administratifs + Minerval première tranche +
                            -20$ de frais d’inscription (Licence) – 30$ (Master) +
                            -10$ de la fiche de scolarité (L3 et M2 uniquement) + 10’000fc (Photos passeport)</span>
                    </p>
                </div>

                <h1 class="mb-4 font-serif text-2xl text-blue-900">Re-inscription pour une classe superieure</h1>
                <div class="px-4">
                    <p>
                        <span>A.</span><span class="px-2">Réinscription : 20$ (Licence) – 30$ (Master)</span>
                    </p>
                    <p class="py-2">
                        <span>B.</span><span class="px-2">Minerval première tranche :
                            voir enseignements organisés (pour les classes terminales,
                            les frais sont à payer en deux tranches)</span>
                    </p>
                    <p class="py-2">
                        <span>C.</span><span class="px-2">Relevé des côtes, Attestation de réussite,
                            Attestation de recherche, Recommandation de stage : 10$</span>
                    </p>
                    <p class="py-2">
                        <span>D.</span><span class="px-2">Fiche de cotation stage : 5$</span>
                    </p>
                    <p class="py-2">
                        <span>E.</span><span class="px-2">Frais de participation a la session : 15$ (Licence)</span>
                    </p>
                </div>
                <p class="py-6 text-justify">
                    Documents : Bulletins 5ème et 6ème des humanités, Diplôme d’Etat (ou Attestation de réussite), Attestation de bonne
                    vie
                    et mœurs, Attestation de naissance et 2 Photos passeport, Relevés des classes inférieures (Pour une inscription
                    spéciale). La Rentrée est prévue pour le 14-10-2022.
                </p>
            </div>

            <!-- img -->
            <div class="hidden col-span-1 col-start-6 lg:flex py-7">
                <img src="img/etu2.png" alt="" class="w-full border " style="height:280px">
            </div>
        </div>
    </div>

    <!-- Formulaire d'inscription -->
<<<<<<< HEAD
    <div class="px-4 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80" style="background-color:#f4f6ff;">
        <div class="flex gap-10 text-lg">
            <div class="items-center hidden py-0 md:flex basis-2/5">
                <img src="/img/learn.png" alt="" srcset="">
            </div>

            <div class="w-full mt-4 mb-10 md:basis-3/5">
                <h1 class="py-2 text-3xl font-bold text-gray-900">Formulaire d'inscription</h1>
                <p class="mb-5 text-sm">Passez dès maintenant à l'action et inscrivez-vous en remplissant le formulaire suivant :</p>
                <div class="">
                    <div class="flex gap-4 text-sm text-gray-900">
=======
    <div class="px-64" style="background-color:#f4f6ff;">
        <div class="flex gap-10 text-lg">
            <div class="mt-32 basis-2/5">
                <img src="/img/learn.png" alt="" srcset="">
            </div>

            <div class="mt-4 mb-10 basis-3/5">
                <h1 class="py-2 text-3xl font-bold text-gray-900">Formulaire d'inscription</h1>
                <p class="mb-5 text-sm">Passez dès maintenant à l'action et inscrivez-vous en remplissant le formulaire suivant :</p>
                <div class="p-4 border border-gray-400 rounded">
                    <div class="flex gap-4 text-sm text-gray-900">
>>>>>>> 78401d21b90a24ef918b03c58a4a7696b859f149
                        <div class="basis-1/2">
                            <label for="" class="block">Prenom <span class="text-red-600">*</span></label>
                            <input type="text" class="w-full h-8 px-4 text-xs text-gray-700 rounded bg-gray-50" placeholder="Prenom">
                        </div>
                        <div class="basis-1/2">
                            <label for="" class="block">Nom <span class="text-red-600">*</span></label>
                            <input type="text" class="w-full h-8 px-4 text-xs text-gray-700 rounded bg-gray-50" placeholder="Nom">
                        </div>
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block">Sexe</label>
                        <select name="" class="w-full h-10 px-4 text-xs text-gray-700 rounded bg-gray-50">
                            <option value="">Homme</option>
                            <option value="">Femme</option>
                        </select>
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block">Nationalité <span class="text-red-600">*</span></label>
                        <input type="text" class="w-full h-8 px-4 text-xs text-gray-700 rounded bg-gray-50" placeholder="Nationalité">
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block">Email <span class="text-red-600">*</span></label>
                        <input type="text" class="w-full h-8 px-4 text-xs text-gray-700 rounded bg-gray-50" placeholder="Email">
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block">Téléphone <span class="text-red-600">*</span></label>
                        <input type="tel" class="w-full h-8 px-4 text-xs text-gray-700 rounded bg-gray-50" placeholder="Téléphone, ex : +243851212121">
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block">Niveau/cycle</label>
                        <select name="" class="w-full h-10 px-4 text-xs text-gray-700 rounded bg-gray-50">
                            <option value="">Graduat</option>
                            <option value="">Licence</option>
                        </select>
                    </div>
                    <div class="mt-1 text-sm">
                        <label for="" class="block">Parlez-nous de vous</label>
                        <textarea name="" id="" cols="30" rows="5" class="w-full px-4 text-xs text-gray-700 rounded-md bg-gray-50" placeholder="Qu'est-ce qui vous définit ?"></textarea>
                    </div>
                    <button class="p-1 px-4 mt-2 text-white bg-blue-600 rounded text-md">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
</template>